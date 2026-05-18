<?php

namespace App\Providers;

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
        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->role === 'admin';
        });
    }
}
