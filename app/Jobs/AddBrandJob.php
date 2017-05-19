<?php

namespace App\Jobs;

use Illuminate\Http\Request;
use Shopperholic\Entities\Brand;

class AddBrandJob
{
    /**
     * @var Request
     */
    private $request;
    /**
     * @var Brand
     */
    private $brand;

    /**
     * Create a new job instance.
     *
     * @param Request $request
     * @param Brand $brand
     */
    public function __construct(Request $request, Brand $brand = null)
    {
        $this->request = $request;
        $this->brand = $brand ?? new Brand(['user_id' => $this->request->user()->id]);
    }

    /**
     * Execute the job
     *
     * @return Brand
     */
    public function handle()
    {
        return $this->createOrUpdateBrand();
    }

    /**
     * Create or update a brand
     *
     * @return Brand
     */
    private function createOrUpdateBrand(): Brand
    {
        foreach($this->brand->getFillable() as $fillable) {
            if ($this->request->has($fillable)) {
                $this->brand->{$fillable} = $this->request->get($fillable);
            }
        }

        $this->brand->save();

        return $this->brand;
    }
}
