<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddCategory;
use App\Http\Requests\UpdateCategory;
use App\Repository\Modules\Category\CategoryInterface;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
private $categoryInterface;
    public function __construct(CategoryInterface $categoryInterface)
    {
        $this->categoryInterface=$categoryInterface;
    }

    public function index(){
        $categories=$this->categoryInterface->all();
        return view('admin.categories.index',compact('categories'));
    }

    public function create(){
        return view('admin.categories.create');
    }

    public function store(AddCategory $request){

        $validator=Validator::make($request->all(),$request->rules());
        if($validator->fails()){
            return redirect()->route('admin.category.create')->withInput();
        }else{
            $this->categoryInterface->store($request->all());
            return redirect()->route('admin.category.all')->with('success','Category created successfully');
        }


    }

    public function edit($id){
        $category=$this->categoryInterface->edit($id);
        if(!$category){
            return redirect()->route('admin.category.all')->with('errors','Category Is Not Found');
        }
        return view('admin.categories.edit',compact('category'));
    }

    public function update($id,Request $request){
        $validator=Validator::make($request->all(),[
            'name'=>'required|min:4|unique:categories,name,'.$request->id,
            'description'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->route('admin.category.edit')->withInput();
        }else{
            return $this->categoryInterface->update($id,$request->all());
        }

    }

    public function delete($id){
        return $this->categoryInterface->delete($id);
    }


}
