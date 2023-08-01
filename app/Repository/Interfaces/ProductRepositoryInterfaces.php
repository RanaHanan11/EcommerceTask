<?php
namespace App\Repository\Interfaces;

interface ProductRepositoryInterfaces{

    public function all();
    public function create();
    public function store($request);
    public function edit($id);
    public function update($request, $id);
    public function destroy($id);

}
