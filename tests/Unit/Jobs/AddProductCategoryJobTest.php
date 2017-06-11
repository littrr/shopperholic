<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Jobs\AddProductCategoryJob;
use Shopperholic\Entities\ProductCategory;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AddProductCategoryJobTest extends TestCase
{
    use DatabaseMigrations;

    public function test_can_create_category()
    {
        $this->authenticateUser();

        $category = factory(ProductCategory::class)->make()->toArray();

        $this->request->merge($category);

        $createdCategory = dispatch(new AddProductCategoryJob($this->request));

        $this->assertInstanceOf(ProductCategory::class, $createdCategory);
        $this->assertNotNull($createdCategory->user);
    }

    public function test_can_update_category()
    {
        $this->authenticateUser();

        $category = factory(ProductCategory::class)->create();

        $this->request->merge(['name' => 'Electronics']);

        $updatedCategory = dispatch(new AddProductCategoryJob($this->request, $category));

        $this->assertInstanceOf(ProductCategory::class, $updatedCategory);
        $this->assertEquals('Electronics', $updatedCategory->name);
        $this->assertNotNull($updatedCategory->user);
    }

    public function test_can_set_parent_category()
    {
        $this->authenticateUser();

        $parent = factory(ProductCategory::class)->create();

        $category = factory(ProductCategory::class)->make(['parent_id' => $parent->id])->toArray();

        $this->request->merge($category);

        $createdCategory = dispatch(new AddProductCategoryJob($this->request));

        $this->assertInstanceOf(ProductCategory::class, $createdCategory);
        $this->assertNotNull($createdCategory->parentCategory);
        $this->assertInstanceOf(ProductCategory::class, $createdCategory->parentCategory);
        $this->assertEquals($parent->id, $createdCategory->parentCategory->id);
    }

    /**
     * @expectedException Shopperholic\Exceptions\ConflictWithExistingRecord
     */
    public function test_exception_thrown_when_adding_a_category_with_name_that_already_exists()
    {
        $this->authenticateUser();

        $category = factory(ProductCategory::class)->create();

        $this->request->merge(factory(ProductCategory::class)->make(['name' => $category->name])->toArray());

        dispatch(new AddProductCategoryJob($this->request));
    }
}
