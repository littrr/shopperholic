<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Shopperholic\Composers\AuthUserComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['*'], AuthUserComposer::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
