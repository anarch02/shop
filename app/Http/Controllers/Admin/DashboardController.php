<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $category = count(Category::get());
        $subcategory = count(Subcategory::get());
        $products = count(Product::get());
        
        return view('admin.dashboard', [
            'category' => $category,
            'subcategory' => $subcategory,
            'products' => $products,
        ]);
    }
}
