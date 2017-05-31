<?php

namespace Tests\Unit;

use Shopperholic\Entities\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    private $user;

    public function setUp()
    {
        parent::setUp();

        $this->user = factory(User::class)->create();
    }

    public function test_app_owner_scope()
    {
        factory(User::class, 5)->create([
            'is_app_owner' => true,
            'is_account_owner' => true
        ]);

        $appOwners = User::appOwner()->get();

        $this->assertCount(6, User::all());
        $this->assertCount(5, $appOwners);
    }

    public function test_is_app_owner()
    {
        $user = factory(User::class)->create(['is_app_owner' => true]);

        $this->assertTrue($user->isAppOwner());
        $this->assertFalse($user->isAccountOwner());
    }

    public function test_is_account_owner()
    {
        $user = factory(User::class)->create(['is_account_owner' => true]);

        $this->assertTrue($user->isAccountOwner());
        $this->assertFalse($user->isAppOwner());
    }
}
