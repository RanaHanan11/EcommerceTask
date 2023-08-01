<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\categoryRequest;
use App\Repository\Interfaces\CategoryRepositoryInterfaces;
use App\Repository\CategoryRepository;

class CategoryController extends Controller
{
    //
    public function index(CategoryRepositoryInterfaces $categoryRepository)
    {
        $categories = $categoryRepository->all();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(categoryRequest $request, CategoryRepositoryInterfaces $categoryRepository)
   {
        $categoryRepository->store($request);
        return redirect()->route('admin.category.index');
   }

    public function edit($id, CategoryRepositoryInterfaces $categoryRepository)
    {
        $category = $categoryRepository->edit($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(categoryRequest $request, $id, CategoryRepositoryInterfaces $categoryRepository)
    {
        $categoryRepository->update($request, $id);
        return redirect()->route('admin.category.index');
    }
    public function destroy($id, CategoryRepositoryInterfaces $categoryRepository)
    {
        $categoryRepository->destroy($id);
        return redirect()->route('admin.category.index');
    }
}
