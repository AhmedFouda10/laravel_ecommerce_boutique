<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\ShopController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Social\GoogleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Social\FacebookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        //  routes website store
        Route::middleware(['guest'])->group(function(){
            Route::get('/', [HomeController::class, 'index'])->name('home');
        });


        // Social Controller

        Route::prefix('facebook')->name('facebook.')->group(function(){
            Route::get('auth',[FacebookController::class,'LoginUsingFacebook'])->name('login');
            Route::get('callback',[FacebookController::class,'CallboackFromFacebook'])->name('callback');
        });

        Route::prefix('google')->name('google.')->group(function(){
            Route::get('auth',[GoogleController::class,'LoginUsingGoogle'])->name('login');
            Route::get('callback',[GoogleController::class,'CallboackFromGoogle'])->name('callback');
        });

        Auth::routes();



        //  routes website store
        Route::middleware(['auth'])->group(function(){
            Route::get('/home', [HomeController::class, 'index'])->name('home');
            Route::get('/shop', [ShopController::class, 'index'])->name('shop');
            Route::get('/shop/{id}', [ShopController::class, 'ProductSelected'])->name('shop.id');
            Route::get('/shop/{page}',[ShopController::class,'ShopPage'])->name('shop.page');
        });



        //  routes dashboard
        Route::middleware(['is_admin','auth'])->prefix('admin')->name('admin')->as('admin.')->group(function(){
            Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

            Route::resource('roles', RoleController::class);
            Route::resource('users', UserController::class);

            Route::prefix('category')->name('category')->as('category.')->group(function(){
                Route::get('all',[CategoryController::class,'index'])->name('all');
                Route::get('create',[CategoryController::class,'create'])->name('create');
                Route::post('store',[CategoryController::class,'store'])->name('store');
                Route::get('show/{id}',[CategoryController::class,'getallbrands'])->name('show');
                Route::get('edit/{id}',[CategoryController::class,'edit'])->name('edit');
                Route::post('update/{id}',[CategoryController::class,'update'])->name('update');
                Route::get('delete/{id}',[CategoryController::class,'delete'])->name('delete');
            });

            Route::prefix('brand')->name('brand')->as('brand.')->group(function(){
                Route::get('all',[BrandController::class,'index'])->name('all');
                Route::get('create',[BrandController::class,'create'])->name('create');
                Route::post('store',[BrandController::class,'store'])->name('store');
                Route::get('edit/{id}',[BrandController::class,'edit'])->name('edit');
                Route::post('update/{id}',[BrandController::class,'update'])->name('update');
                Route::get('delete/{id}',[BrandController::class,'delete'])->name('delete');
            });

            Route::prefix('product')->name('product')->as('product.')->group(function(){
                Route::get('all',[ProductController::class,'index'])->name('all');
                Route::get('create',[ProductController::class,'create'])->name('create');
                Route::post('store',[ProductController::class,'store'])->name('store');
                Route::get('edit/{id}',[ProductController::class,'edit'])->name('edit');
                Route::post('update/{id}',[ProductController::class,'update'])->name('update');
                Route::get('delete/{id}',[ProductController::class,'delete'])->name('delete');
                Route::get('fetchBrands/{CategoryId}', [ProductController::class, 'fetchBrand']);
            });
        });
    });




    // Route::middleware(['is_admin'])->name('admin')->namespace('Admin')->group(function(){
    //     Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //     Route::resource('roles', RoleController::class);
    //     Route::resource('users', UserController::class);
    // });
