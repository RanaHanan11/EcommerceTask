<?php
namespace App\Repository;
use App\Repository\Interfaces\CategoryRepositoryInterfaces;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterfaces{

    public function all(){
        $categories =  Category::all();
        return view('admin.category.index', compact('categories'));
    }
    public function create(){
        return view('admin.category.create');
    }
    public function store($request){
        Category::create($request->all());
        return redirect()->route('admin.category.index');
    }
    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update($request, $id){
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
