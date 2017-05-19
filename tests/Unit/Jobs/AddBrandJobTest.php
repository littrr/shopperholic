<?php

namespace Tests\Unit;

use App\Jobs\AddBrandJob;
use Shopperholic\Entities\Brand;
use Shopperholic\Entities\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AddBrandJobTest extends TestCase
{
    use DatabaseMigrations;

    public function test_can_create_brand()
    {
        $this->authenticateUser();

        $brand = factory(Brand::class)->make();

        $this->request->merge($brand);

        $createdBrand = dispatch(new AddBrandJob($this->request));

        $this->assertInstanceOf(Brand::class, $createdBrand);
        $this->assertNotNull($createdBrand->user);
        $this->assertInstanceOf(User::class, $createdBrand->user);
    }

    public function test_can_update_brand()
    {
        $this->authenticateUser();

        $brand = factory(Brand::class)->create();

        $this->request->merge(['name' => 'Gucci']);

        $updatedBrand = dispatch(new AddBrandJob($this->request, $brand));

        $this->assertInstanceOf(Brand::class, $updatedBrand);
        $this->assertEquals('Gucci', $updatedBrand->name);
    }
}
