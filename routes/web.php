<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

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
    return redirect(\route('login::index'));
});

Route::group(['namespace' => 'Login', 'prefix' => 'login', 'as' => 'product::'], function() {
    Route::get('/',[ProductController::class,'index'])->name('index');
});

Route::group(['namespace' => 'Login', 'prefix' => 'login', 'as' => 'login::'], function() {
    Route::get('/',[LoginController::class,'index'])->name('index');
    Route::post('/',[LoginController::class,'login'])->name('login');
});

Route::group(['middleware' => ['admin']],function (){
    Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin::'], function() {
        Route::get('/logout',[LoginController::class,'logout'])->name('logout');

        Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

        Route::group(['namespace' => 'Product', 'prefix' => 'products', 'as' => 'product::'], function() {
            Route::get('/',[ProductController::class,'index'])->name('index');
            Route::get('/create',[ProductController::class,'create'])->name('create');
            Route::post('/create',[ProductController::class,'store'])->name('store');
            Route::get('/edit/{product}',[ProductController::class,'edit'])->name('edit');
            Route::put('/edit/{product}',[ProductController::class,'update'])->name('update');
            Route::delete('/delete/{product}',[ProductController::class,'destroy'])->name('destroy');
        });

        Route::group(['namespace' => 'Users', 'prefix' => 'users', 'as' => 'users::'], function() {
            Route::get('/',[UserController::class,'index'])->name('index');
            Route::get('/create',[UserController::class,'create'])->name('create');
            Route::post('/create',[UserController::class,'store'])->name('store');
            Route::get('/edit/{user}',[UserController::class,'edit'])->name('edit');
            Route::put('/edit/{user}',[UserController::class,'update'])->name('update');
            Route::delete('/delete/{user}',[UserController::class,'destroy'])->name('destroy');
        });

        Route::group(['prefix' => 'data'],function (){
            Route::group(['namespace' => 'Tags', 'prefix' => 'tags', 'as' => 'tags::'], function() {
                Route::get('/',[TagController::class,'index'])->name('index');
                Route::get('/create',[TagController::class,'create'])->name('create');
                Route::post('/create',[TagController::class,'store'])->name('store');
                Route::get('/edit/{tag}',[TagController::class,'edit'])->name('edit');
                Route::put('/edit/{tag}',[TagController::class,'update'])->name('update');
                Route::delete('/delete/{tag}',[TagController::class,'destroy'])->name('destroy');
            });

            Route::group(['namespace' => 'Product Category', 'prefix' => 'product-category', 'as' => 'product-category::'], function() {
                Route::get('/',[ProductCategoryController::class,'index'])->name('index');
                Route::get('/create',[ProductCategoryController::class,'create'])->name('create');
                Route::post('/create',[ProductCategoryController::class,'store'])->name('store');
                Route::get('/edit/{category}',[ProductCategoryController::class,'edit'])->name('edit');
                Route::put('/edit/{category}',[ProductCategoryController::class,'update'])->name('update');
                Route::delete('/delete/{category}',[ProductCategoryController::class,'destroy'])->name('destroy');
            });
        });
    });
});
