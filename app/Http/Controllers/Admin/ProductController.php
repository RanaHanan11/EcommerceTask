<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\productRequest;

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

    public function create()
    {
        $categories = Category::where('status', 1)->get();
        return view('admin.product.create', compact('categories'));
    }
    public function store(productRequest $request)
    {
        $input = $request->all();
        //feature_image store
        if ($image = $request->file('feature_image')) {
            $destinationPath = public_path('/uploads/feature_product/'); // upload path
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['feature_image'] = "$profileImage";
        }
        //store multiple_image in product_images table
        if ($images = $request->file('multiple_image')) {
            foreach ($images as $image) {
                $destinationPath = public_path('/uploads/multiple_product/'); // upload path
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $data[] = $profileImage;
            }
            $input['multiple_image'] = json_encode($data);
        }
        $product = DB::table('products')->insert([
            'title' => $input['title'],
            'price' => $input['price'],
            'category_id' => $input['category_id'],
            'description' => $input['description'],
            'created_at' => Carbon::now(),
        ]);
        //if not product created then return error
        if (!$product) {
            return redirect()->back()->withInput()->with('error', 'Product not created.');
        }
        //get latest product id from products table
        $product_id = DB::getPdo()->lastInsertId();
        $gallery = DB::table('galleries')->insert([
            'product_id' => $product_id,
            'feature_image' => $input['feature_image'],
            'multiple_image' => $input['multiple_image'],
            'created_at' => Carbon::now(),
        ]);
        if ($product && $gallery) {
            return redirect()->route('admin.product.index')->with('success', 'Product created successfully.');
        }
    }
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $selectedCategoryId = $product->category_id;
        return view('admin.product.edit', compact('product', 'categories', 'selectedCategoryId'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect()->route('admin.product.index');
    }
}
