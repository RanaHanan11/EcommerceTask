<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\productRequest;

use App\Repository\Interfaces\ProductRepositoryInterfaces;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(ProductRepositoryInterfaces $productRepository)
    {
       return $productRepository->all();

    }

    public function create(ProductRepositoryInterfaces $productRepository)
    {
        return $productRepository->create();

    }
    public function store(productRequest $request, ProductRepositoryInterfaces $productRepository)
    {
        return $productRepository->store($request);
    }
    public function edit($id, ProductRepositoryInterfaces $productRepository)
    {
        return $productRepository->edit($id);
    }
    public function update(Request $request, $id, ProductRepositoryInterfaces $productRepository)
    {
        return $productRepository->update($request, $id);
    }

    public function destroy($id, ProductRepositoryInterfaces $productRepository)
    {
        return $productRepository->destroy($id);
    }
}
