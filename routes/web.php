<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubcategoryController;
use App\Models\Category;
use App\Models\Product;
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
    $products = Product::paginate(12);

    return view('welcome', [
        'products' => $products
    ]);
});

Route::controller(SubcategoryController::class)->group(function()
{
    Route::get('/category/{id}', 'index')->name('subcategory');
});

Route::controller(ProductController::class)->group(function()
{
    Route::get('/products/{id}', 'index')->name('product');
    Route::get('/products/all', 'all_products')->name('all_products');
});
