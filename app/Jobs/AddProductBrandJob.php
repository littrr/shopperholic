<?php

namespace App\Jobs;

use Illuminate\Http\Request;
use Shopperholic\Entities\ProductBrand;
use Shopperholic\Exceptions\ConflictWithExistingRecord;

class AddProductBrandJob
{
    /**
     * @var Request
     */
    private $request;
    /**
     * @var ProductBrand
     */
    private $brand;

    /**
     * AddProductBrandJob constructor.
     *
     * @param Request $request
     * @param ProductBrand|null $brand
     */
    public function __construct(Request $request, ProductBrand $brand = null)
    {
        $this->request = $request;
        $this->brand = $brand ?? new ProductBrand(['user_id' => $this->request->user()->id]);
    }

    /**
     * Execute the job
     *
     * @return ProductBrand
     */
    public function handle()
    {
        $this->checkIsNotExistingRole();

        return $this->createOrUpdateBrand();
    }

    /**
     * Create or update a product's brand
     *
     * @return ProductBrand
     */
    private function createOrUpdateBrand(): ProductBrand
    {
        foreach($this->brand->getFillable() as $fillable) {
            if ($this->request->has($fillable)) {
                $this->brand->{$fillable} = $this->request->get($fillable);
            }
        }

        $this->brand->slug = $this->request->get('name');

        $this->brand->save();

        return $this->brand;
    }

    public function checkIsNotExistingRole()
    {
        $brand = ProductBrand::where([
            'name' => $this->request->get('name'),
        ])->first();

        if (empty($brand) || $brand->id === $this->brand->id) {
            return false;
        }

        throw ConflictWithExistingRecord::fromModel($brand);
    }
}
