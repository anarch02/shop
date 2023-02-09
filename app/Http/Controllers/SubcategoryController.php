<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index($id)
    {
        $subcategory = Subcategory::findOrFail($id);
        $subcategory_name = $subcategory->title;
        $products = $subcategory->products;
        // dd($subcategory_name);
        
        return view('pages.products', [
            'products' => $products,
            'subcategory_name' => $subcategory_name
        ]);
    }
}
