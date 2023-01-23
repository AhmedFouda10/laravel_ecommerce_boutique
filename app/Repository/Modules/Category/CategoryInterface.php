<?php
namespace App\Repository\Modules\Category;


interface CategoryInterface{
    public function all();
    public function store($request);
    public function edit($id);
    public function update($id,$request);
    public function delete($id,$request);
}
