<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Product;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\categoryRequest;
use App\Repository\Interfaces\CategoryRepositoryInterfaces;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(CategoryRepositoryInterfaces $categoryRepository)
    {
        return $categoryRepository->all();
    }

    public function create(CategoryRepositoryInterfaces $categoryRepository)
    {
        return $categoryRepository->create();
    }

    public function store(categoryRequest $request, CategoryRepositoryInterfaces $categoryRepository)
   {

        return $categoryRepository->store($request);
   }

    public function edit($id, CategoryRepositoryInterfaces $categoryRepository)
    {
        return $categoryRepository->edit($id);
    }

    public function update(categoryRequest $request, $id, CategoryRepositoryInterfaces $categoryRepository)
    {
       return $categoryRepository->update($request, $id);

    }
    public function destroy($id, CategoryRepositoryInterfaces $categoryRepository)
    {
       return $categoryRepository->destroy($id);

    }

    public function getCategory($id){
        $product_category = Category::findOrFail($id);

        $products = Product::with('gallery')->where('category_id', $id)->get();
        foreach ($products as $product) {
            foreach ($product->gallery as $gallery) {
            $gallery->feature_image;
            }
        }

        return view('admin.product_category.show_product_category', compact('product_category','products'));
    }
}
