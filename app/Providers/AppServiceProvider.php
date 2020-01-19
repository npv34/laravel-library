<?php

namespace App\Providers;

use App\Http\Controllers\RoleConstant;
use App\Repositories\UserRepository;
use App\Services\UserService;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            UserRepository::class
        );
        $this->app->singleton(
            UserService::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('crud-users', function ($user) {
            //logic
            if ($user->role == RoleConstant::ADMIN) {
                return true;
            }
            return false;
        });
    }
}
