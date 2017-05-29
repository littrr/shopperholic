<?php

namespace Shopperholic\Composers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\View\View;

class AuthUserComposer
{
    /**
     * @var Guard
     */
    private $guard;

    public function __construct(Guard $guard)
    {
        $this->guard = $guard;
    }

    public function compose(View $view)
    {
        return $view->with('authUser', $this->guard->user());
    }
}