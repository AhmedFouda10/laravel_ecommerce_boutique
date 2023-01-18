<?php
namespace App\Repository\Modules\Brand;


interface BrandInterface{
    public function all();
    public function store($inputs);
    public function edit($id);
    public function update($id,$inputs);
    public function delete($id);
}
