<?php

namespace App\Repository;
use App\Repository\Interfaces\ProductRepositoryInterfaces;
use App\Models\Product;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductRepository implements ProductRepositoryInterfaces{
    public function all(){
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }
    public function create(){
        $categories = Category::where('status', 1)->get();
        return view('admin.product.create', compact('categories'));
    }
    public function store($request)
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
        } else {
            return redirect()->back()->withInput()->with('error', 'Product not created.');
        }
    }

    public function edit($id){
        $product = Product::find($id);
        $categories = Category::all();
        $selectedCategoryId = $product->category_id;
        return view('admin.product.edit', compact('product', 'categories', 'selectedCategoryId'));
    }

    public function update($request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect()->route('admin.product.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.product.index');
    }
}

