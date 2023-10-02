<?php

namespace App\Providers;
use App\Interfaces\Admin\AdvertisingRepositoryInterface;
use App\Interfaces\Admin\CategoryRepositoryInterface;
use App\Interfaces\Admin\DashboardRepositoryInterface;
use App\Interfaces\Admin\OrderRepositoryInterface;
use App\Interfaces\Admin\ProductiveFamilyRepositoryInterface;
use App\Repositories\Admin\AdvertisingRepository;
use App\Repositories\Admin\CategoryRepository;
use App\Repositories\Admin\DashboardRepository;
use App\Repositories\Admin\OrderRepository;
use App\Repositories\Admin\ProductiveFamilyRepository;
use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(DashboardRepositoryInterface::class, DashboardRepository::class);
        $this->app->bind(AdvertisingRepositoryInterface::class, AdvertisingRepository::class);
        $this->app->bind(ProductiveFamilyRepositoryInterface::class, ProductiveFamilyRepository::class);
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
