<?php

namespace Tests\Unit;

use App\Jobs\AddProductBrandJob;
use Shopperholic\Entities\ProductBrand;
use Shopperholic\Entities\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AddProductBrandJobTest extends TestCase
{
    use DatabaseMigrations;

    public function test_can_create_brand()
    {
        $this->authenticateUser();

        $brand = factory(ProductBrand::class)->make()->toArray();

        $this->request->merge($brand);

        $createdBrand = dispatch(new AddProductBrandJob($this->request));

        $this->assertInstanceOf(ProductBrand::class, $createdBrand);
        $this->assertNotNull($createdBrand->user);
        $this->assertInstanceOf(User::class, $createdBrand->user);
    }

    public function test_can_update_brand()
    {
        $this->authenticateUser();

        $brand = factory(ProductBrand::class)->create();

        $this->request->merge(['name' => 'Gucci']);

        $updatedBrand = dispatch(new AddProductBrandJob($this->request, $brand));

        $this->assertInstanceOf(ProductBrand::class, $updatedBrand);
        $this->assertEquals('Gucci', $updatedBrand->name);
    }
}
