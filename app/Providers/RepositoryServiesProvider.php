<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Repository\Modules\Category\DBcategory;
use App\Repository\Modules\Category\CategoryInterface;

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
