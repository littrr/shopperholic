<?php

namespace Tests\Unit;

use Shopperholic\Entities\Role;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RoleTest extends TestCase
{
    use DatabaseMigrations;

    private $role;

    public function setUp()
    {
        parent::setUp();

        $this->role = factory(Role::class)->create();
    }

    //todo: Test role userable

    public function test_can_sluggify_role()
    {
        $name = 'Add User';

        $this->role->name = $name;

        $this->assertEquals(str_slug($name), $this->role->name);
    }

    public function test_can_get_route_key_name()
    {
        $this->assertEquals('name', $this->role->getRouteKeyName());
    }
}
