<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Categories\src\Repositories\CategoriesRepository;
use Modules\User\src\Repositories\UserRepository;
use Modules\User\src\Repositories\UserRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
