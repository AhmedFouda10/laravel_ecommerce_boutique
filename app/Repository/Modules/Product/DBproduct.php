<?php
namespace App\Repository\Modules\Product;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Repository\Modules\Product\ProductInterface;

class DBproduct implements ProductInterface{
    public function all()
    {
        return Product::orderBy('id','DESC')->get();;
    }

    public function create(){
        $categories=Category::all();
        $brands=Brand::all();
        return $data=[
            'categories'=>$categories,
            'brands'=>$brands
        ];
    }

    public function store($request){

        $product=new Product();
        // image
        // $file=$request->image;
        // $filename = time() . '.' . $file->getClientOriginalExtension();
        // $file->move(public_path('backend/assets/images/products/'), $filename);
        // $product->name=$filename;

        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quentity=$request->quentity;
        $product->category_id=$request->category_id;
        $product->brand_id=$request->brand_id;
        return $product->save();
    }

    public function edit($id){
        return Product::find($id);
    }

    public function update($id,$inputs)
    {
        $product=Product::find($id);
        if(!$product){
            return redirect()->route('admin.product.all')->with('errors','product Is Not Found');
        }else{
            $product->update($inputs);
            return redirect()->route('admin.product.all')->with('success','product Updated Successfully');

        }

    }

    public function delete($id){
        $product=Product::find($id);
        if(!$product){
            return redirect()->route('admin.product.all')->with('errors','product Is Not Found');
        }else{
            $product->delete();
            return redirect()->route('admin.product.all')->with('success','product Deleted Successfully');

        }
    }

}
