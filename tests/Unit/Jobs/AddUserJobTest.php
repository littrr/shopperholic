<?php

namespace Tests\Unit;

use App\Jobs\AddUserJob;
use Shopperholic\Entities\Role;
use Shopperholic\Entities\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class AddUserJobTest extends TestCase
{
    use DatabaseMigrations;

    public function test_can_create_user_from_request()
    {
        $this->authenticateUser();

        $user = factory(User::class)->make()->toArray();

        $roles = factory(Role::class, 2)->create();

        $this->request->merge(array_merge($user, ['roles' => $roles->toArray()]));

        $createdUser = dispatch(new AddUserJob($this->request));
        $this->assertCount(2, $createdUser->roles);
        $this->assertEquals($roles->first()->name, $createdUser->roles->first()->name);
        $this->assertEquals($roles->last()->name, $createdUser->roles->last()->name);
        $this->assertInstanceOf(User::class, $createdUser);
        $this->assertNotNull($createdUser->user);
    }

    public function test_can_update_user_from_request()
    {
        $this->authenticateUser();

        $user = factory(User::class)->create();

        $this->request->merge([
            'name' => 'Godwin Hottor',
            'email' => 'godwinhottor@kingsmail.com'
        ]);

        $updatedUser = dispatch(new AddUserJob($this->request, $user));

        $this->assertInstanceOf(User::class, $updatedUser);
        $this->assertEquals('Godwin Hottor', $updatedUser->name);
        $this->assertEquals('godwinhottor@kingsmail.com', $updatedUser->email);
    }
}
