<?php
namespace App\Repository\Interfaces;

interface CategoryRepositoryInterfaces{

    public function all();
    public function store($request);
    public function edit($id);
    public function update($request, $id);
    public function destroy($id);
}
