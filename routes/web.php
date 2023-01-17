<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['is_admin'])->prefix('admin')->name('admin')->as('admin.')->namespace('Admin')->group(function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

    Route::prefix('category')->name('category')->as('category.')->group(function(){
        Route::get('all',[CategoryController::class,'index'])->name('all');
        Route::get('create',[CategoryController::class,'create'])->name('create');
        Route::post('store',[CategoryController::class,'store'])->name('store');
        Route::get('edit/{id}',[CategoryController::class,'edit'])->name('edit');
        Route::post('update/{id}',[CategoryController::class,'update'])->name('update');
        Route::get('delete/{id}',[CategoryController::class,'delete'])->name('delete');
    });
});


// Route::group(['middleware' => ['auth']], function() {

// });
