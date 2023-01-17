<?php
namespace App\Repository\Modules\Category;


use App\Models\Category;
use App\Repository\Modules\Category\CategoryInterface;


class DBcategory implements CategoryInterface{
    public function all()
    {
        return Category::orderBy('id','DESC')->get();;
    }


    public function store($inputs){
       return Category::create($inputs);
    }

    public function edit($id){
        return Category::find($id);
    }

    public function update($id,$inputs)
    {
        $category=Category::find($id);
        if(!$category){
            return redirect()->route('admin.category.all')->with('errors','Category Is Not Found');
        }else{
            $category->update($inputs);
            return redirect()->route('admin.category.all')->with('success','Category Updated Successfully');

        }

    }

    public function delete($id){
        $category=Category::find($id);
        if(!$category){
            return redirect()->route('admin.category.all')->with('errors','Category Is Not Found');
        }else{
            $category->delete();
            return redirect()->route('admin.category.all')->with('success','Category Deleted Successfully');

        }
    }

}
