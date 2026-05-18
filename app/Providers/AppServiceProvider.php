<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        //checks if auth user is admin and allows to use @admin directive in blade templates
        Blade::if('leader', function () {
            return auth()->check() && auth()->user()->role === 'leader';
        });
    }
}
