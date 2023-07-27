<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){
        Category::create($request->all());
        return redirect()->route('admin.category.index');
    }

    public function edit($id){
    $category = Category::find($id);
    return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id){
    $category = Category::find($id);
    $category->update($request->all());
    return redirect()->route('admin.category.index');
    }
    public function destroy($id){
    $category = Category::find($id);
    $category->delete();
    return redirect()->route('admin.category.index');
    }
}
