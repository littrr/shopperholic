<?php

namespace App\Jobs;

use Illuminate\Http\Request;
use Shopperholic\Entities\ProductCategory;

class AddProductCategoryJob
{
    /**
     * @var Request
     */
    private $request;
    /**
     * @var ProductCategory
     */
    private $category;

    /**
     * Create a new job instance.
     *
     * @param Request $request
     * @param ProductCategory $category
     */
    public function __construct(Request $request, ProductCategory $category = null)
    {
        $this->request = $request;
        $this->category = $category ?? new ProductCategory(['user_id' => $this->request->user()->id]);
    }

    /**
     * Execute the job.
     *
     * @return ProductCategory
     */
    public function handle()
    {
        return $this->createOrUpdateCategory();
    }

    /**
     * Create or update a category
     *
     * @return ProductCategory
     */
    public function createOrUpdateCategory(): ProductCategory
    {
        foreach($this->category->getFillable() as $fillable) {
            if ($this->request->has($fillable)) {
                $this->category->{$fillable} = $this->request->get($fillable);
            }
        }

        $this->category->save();

        return $this->category;
    }
}
