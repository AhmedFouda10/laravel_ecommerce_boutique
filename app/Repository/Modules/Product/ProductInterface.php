<?php
namespace App\Repository\Modules\Product;


interface ProductInterface{
    public function all();
    public function create();
    public function store($inputs);
    public function edit($id);
    public function update($id,$inputs);
    public function delete($id);
}
