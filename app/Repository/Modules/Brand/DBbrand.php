<?php
namespace App\Repository\Modules\Brand;

use App\Models\Brand;
use App\Repository\Modules\Brand\BrandInterface;



class DBbrand implements BrandInterface{
    public function all()
    {
        return Brand::orderBy('id','DESC')->get();;
    }


    public function store($inputs){
       return Brand::create($inputs);
    }

    public function edit($id){
        return Brand::find($id);
    }

    public function update($id,$inputs)
    {
        $brand=Brand::find($id);
        if(!$brand){
            return redirect()->route('admin.brand.all')->with('errors','Brand Is Not Found');
        }else{
            $brand->update($inputs);
            return redirect()->route('admin.brand.all')->with('success','Brand Updated Successfully');

        }

    }

    public function delete($id){
        $brand=Brand::find($id);
        if(!$brand){
            return redirect()->route('admin.brand.all')->with('errors','Brand Is Not Found');
        }else{
            $brand->delete();
            return redirect()->route('admin.brand.all')->with('success','Brand Deleted Successfully');

        }
    }

}
