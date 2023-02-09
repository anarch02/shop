<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;


Route::controller(AuthController::class)->group(function()
{
    Route::get('/login', 'index')->name('admin.login');
    Route::post('/login_proccess', 'login')->name('admin.login_proccess');
    Route::post('/logout', 'logout')->name('admin.logout');
});

Route::middleware('auth:admin')->group(function()
{
    // if(!auth('admin')->check())
    // {
    //     return redirect('/login');
    // }

    Route::controller(DashboardController::class)->group(function()
    {
        Route::get('/dashboard', 'index')->name('admin.dashboard');
    });

    // Resource
    Route::resource('category', CategoryController::class);
    Route::resource('subcategory', SubcategoryController::class);
    Route::resource('products', ProductController::class);
});