<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    //
    public function index()
    {
        $categories =  Category::where('status', 1)->get();
        //products get
        $products = DB::table('products')
            ->leftjoin('galleries', 'products.id','galleries.product_id')
            ->select('products.*', 'galleries.*')
            ->get();
        return  view('front.layout_pages.app', compact('categories', 'products'));
    }
}
