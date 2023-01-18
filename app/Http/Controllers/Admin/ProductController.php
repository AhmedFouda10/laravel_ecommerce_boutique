<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Modules\Product\AddProduct;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use App\Repository\Modules\Product\ProductInterface;

class ProductController extends Controller
{
    private $productInterface;
    public function __construct(ProductInterface $productInterface)
    {
        $this->productInterface=$productInterface;
    }

    public function index(){
        $products=$this->productInterface->all();
        return view('admin.products.index',compact('products'));
    }

    public function create(){
        $data=$this->productInterface->create();
        $categories=$data['categories'];
        $brands=$data['brands'];

        return view('admin.products.create',compact('categories','brands'));
    }

    public function store(AddProduct $request){

        $validator=Validator::make($request->all(),$request->rules());
        if($validator->fails()){
            return redirect()->route('admin.products.create')->withInput();
        }else{
            $this->productInterface->store($request);
            return redirect()->route('admin.products.all')->with('success','product created successfully');
        }

    }

    public function edit($id){
        $product=$this->productInterface->edit($id);
        if(!$product){
            return redirect()->route('admin.products.all')->with('errors','product Is Not Found');
        }
        return view('admin.products.edit',compact('product'));
    }

    public function update($id,Request $request){
        $validator=Validator::make($request->all(),[
            'name'=>'required|min:4|unique:products,name,'.$request->id,
            'description'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->route('admin.products.edit')->withInput();
        }else{
            return $this->productInterface->update($id,$request->all());
        }

    }

    public function delete($id){
        return $this->productInterface->delete($id);
    }
}
