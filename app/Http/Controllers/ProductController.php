<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id)
    {
        $product = Product::findOrFail($id);

        return view('pages.product', [
            'product' => $product
        ]);
    }

    public function all_products()
    {
        $products = Product::paginate(12);

        return view('pages.products', [
            'products' => $products
        ]);
    }
}
