<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App\User\UserRepositoryInterface', 'App\User\UserRepository');
        $this->app->singleton('App\User\RoleRepositoryInterface', 'App\User\RoleRepository');
        $this->app->singleton('App\User\PermissionRepositoryInterface', 'App\User\PermissionRepository');
    }
}
