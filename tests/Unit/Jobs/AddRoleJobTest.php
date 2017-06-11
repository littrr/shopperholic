<?php

namespace Tests\Unit;

use App\Jobs\AddRoleJob;
use Shopperholic\Entities\Role;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AddRoleJobTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();

        $this->seed();
    }

    public function test_can_create_role_from_request()
    {
        $this->authenticateUser();

        $role = factory(Role::class)->make();

        $this->request->merge(array_merge($role->toArray(), ['permissions' => ['add-product', 'edit-product', 'delete-product']]));

        $createdRole = dispatch(new AddRoleJob($this->request));

        $this->assertInstanceOf(Role::class, $createdRole);
        $this->assertEquals($role->name, $createdRole->name);
        $this->assertCount(3, $createdRole->permissions);
        $this->assertEquals('add-product', $createdRole->permissions->first()->name);
        $this->assertEquals('delete-product', $createdRole->permissions->last()->name);
    }

    public function test_can_update_role_from_request()
    {
        $this->authenticateUser();

        $role = factory(Role::class)->create();

        $this->request->merge(array_merge(factory(Role::class)->make(['name' => 'User Manager'])->toArray(), ['permissions' => ['add-user', 'edit-user']]));

        $createdRole = dispatch(new AddRoleJob($this->request, $role));

        $this->assertInstanceOf(Role::class, $createdRole);
        $this->assertEquals($role->name, $createdRole->name);
        $this->assertCount(2, $createdRole->permissions);
        $this->assertEquals('add-user', $createdRole->permissions->first()->name);
        $this->assertEquals('edit-user', $createdRole->permissions->last()->name);
    }

    /**
     * @expectedException Shopperholic\Exceptions\ConflictWithExistingRecord
     */
    public function test_exception_thrown_when_adding_a_role_with_name_that_already_exists()
    {
        $this->authenticateUser();

        $role = factory(Role::class)->create();

        $this->request->merge(factory(Role::class)->make(['display_name' => $role->display_name])->toArray());

        dispatch(new AddRoleJob($this->request));
    }
}
