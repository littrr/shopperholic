<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Http\Request;
use Shopperholic\Entities\User;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected $request;

    public function setUp()
    {
        parent::setUp();

        $this->request = new Request();
    }

    protected function authenticateUser()
    {
        $this->request->setUserResolver(function () {
            return factory(User::class)->create();
        });
    }
}
