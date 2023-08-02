<?php

namespace App\Repository;

use App\Repository\Interfaces\ProductRepositoryInterfaces;
use App\Models\Product;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Log;

class ProductRepository implements ProductRepositoryInterfaces
{
    public function all()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }
    public function create()
    {
        $categories = Category::where('status', 1)->get();
        return view('admin.product.create', compact('categories'));
    }
    public function store($request)
    {
        try {
            $input = $request->all();
            $variantData = json_decode($request->get('variant_combinations'), true);

            if (!$variantData) {
                throw new Exception("Variant combinations data is not valid JSON.");
            }

            $combinations = $variantData['combinations'] ?? null;
            $quantity = $variantData['quantity'] ?? null;

            if (!$combinations || !$quantity) {
                throw new Exception("Combinations or quantity data missing from variant data.");
            }

            // Explode each combination string on "/" and get the first element.
            $size = array_map(function ($combination) {
                return explode('/', $combination)[0];
            }, $combinations);

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
                throw new Exception("Product was not created.");
            }

            //get latest product id from products table
            $product_id = DB::getPdo()->lastInsertId();
            $gallery = DB::table('galleries')->insert([
                'product_id' => $product_id,
                'feature_image' => $input['feature_image'],
                'multiple_image' => $input['multiple_image'],
                'created_at' => Carbon::now(),
            ]);

            if (!$gallery) {
                throw new Exception("Gallery was not created.");
            }

            // For each variant combination, insert a new variant and variant option.
            for ($i = 0; $i < count($combinations); $i++) {
                // The first part of the combination string is the variant size.
                $variantSize = explode('/', $combinations[$i])[0];

                // Check if variantSize is null or empty
                if (is_null($variantSize) || empty($variantSize)) {
                    throw new Exception("Variant size is empty or null for combination: {$combinations[$i]}");
                }

                // Insert a new variant and retrieve the ID.
                $variantId = DB::table('varients')->insertGetId([
                    'size' => $variantSize,
                    'product_id' => $product_id,
                    'created_at' => Carbon::now(),
                ]);

                // Check if variantId is null
                if (is_null($variantId)) {
                    throw new Exception("Variant was not inserted correctly, variantId is null for size: {$variantSize}");
                }

                // Insert a new variant option with the retrieved variant ID.
                $variantOption = DB::table('varient_options')->insert([
                    'title' => $combinations[$i],
                    'quantity' => $quantity[$i],
                    'product_id' => $product_id,
                    'varient_id' => $variantId,
                    'created_at' => Carbon::now(),
                ]);

                // Check if variantOption insertion was successful
                if (!$variantOption) {
                    throw new Exception("Variant Option was not inserted correctly for variantId: {$variantId}");
                }
            }

            return redirect()->route('admin.product.index')->with('success', 'Product created successfully.');
        } catch (Exception $e) {
            // Log the exception message and return an error response
            Log::error("An error occurred while creating the product: " . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'An error occurred while creating the product. ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
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
