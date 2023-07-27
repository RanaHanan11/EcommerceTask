<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::with('category')->get();
        return view('admin.product.index', [
            'products' => $products,
        ]);
    }

    public function create(){
        $categories = Category::all();
        $selectedCategoryId = $categories->first()->id;
        return view('admin.product.create', compact('categories','selectedCategoryId' ));
    }
}
