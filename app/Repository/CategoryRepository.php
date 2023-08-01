<?php
namespace App\Repository;
use App\Repository\Interfaces\CategoryRepositoryInterfaces;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterfaces{

    public function all(){
        return Category::all();
    }
    public function store($request){
        return Category::create($request->all());
    }
    public function edit($id){
        return Category::find($id);
    }
    public function update($request, $id){
        $category = Category::find($id);
        $category->update($request->all());
        return $category;
    }
    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return $category;
    }

}
