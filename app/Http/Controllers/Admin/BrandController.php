<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Modules\Brand\AddBrand;
use Illuminate\Support\Facades\Validator;
use App\Repository\Modules\Brand\BrandInterface;

class BrandController extends Controller
{
    private $brandInterface;
    public function __construct(BrandInterface $brandInterface)
    {
        $this->brandInterface=$brandInterface;
    }

    public function index(){
        $brands=$this->brandInterface->all();
        return view('admin.brands.index',compact('brands'));
    }

    public function create(){
        return view('admin.brands.create');
    }

    public function store(AddBrand $request){

        $validator=Validator::make($request->all(),$request->rules());
        if($validator->fails()){
            return redirect()->route('admin.brand.create')->withInput();
        }else{
            $this->brandInterface->store($request->all());
            return redirect()->route('admin.brand.all')->with('success','Brand created successfully');
        }


    }

    public function edit($id){
        $brand=$this->brandInterface->edit($id);
        if(!$brand){
            return redirect()->route('admin.brand.all')->with('errors','Brand Is Not Found');
        }
        return view('admin.brands.edit',compact('brand'));
    }

    public function update($id,Request $request){
        $validator=Validator::make($request->all(),[
            'name'=>'required|min:4|unique:brands,name,'.$request->id,
            'description'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->route('admin.brand.edit')->withInput();
        }else{
            return $this->brandInterface->update($id,$request->all());
        }

    }

    public function delete($id){
        return $this->brandInterface->delete($id);
    }
}
