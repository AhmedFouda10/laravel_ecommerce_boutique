<?php

namespace App\Providers;

use App\Repository\Modules\Brand\BrandInterface;
use App\Repository\Modules\Brand\DBbrand;
use Illuminate\Support\ServiceProvider;
use App\Repository\Modules\Category\DBcategory;
use App\Repository\Modules\Category\CategoryInterface;
use App\Repository\Modules\Product\DBproduct;
use App\Repository\Modules\Product\ProductInterface;

class RepositoryServiesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CategoryInterface::class,DBcategory::class);
        $this->app->bind(BrandInterface::class,DBbrand::class);
        $this->app->bind(ProductInterface::class,DBproduct::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
