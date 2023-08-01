<?php

namespace App\Providers;
use App\Repository\CategoryRepository;
use App\Repository\Interfaces\CategoryRepositoryInterfaces;
use App\Repository\ProductRepository;
use App\Repository\Interfaces\ProductRepositoryInterfaces;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CategoryRepositoryInterfaces::class, CategoryRepository::class);
        $this->app->bind(ProductRepositoryInterfaces::class, ProductRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
