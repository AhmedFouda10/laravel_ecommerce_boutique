<?php
namespace App\Repository\Modules\Website;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Website;
use App\Repository\Modules\Website\WebsiteInterface;


class DBWebsite implements WebsiteInterface{
    public function all()
    {
        $categories= Category::all();
        $products= Product::all();
        return $data=[
            'categories'=>$categories,
            'products'=>$products,
        ];

    }

    public function shop(){
        $categories= Category::all();
        $brands=Brand::all();
        $products=Product::Paginate(3);
        return $data=[
            'categories'=>$categories,
            'products'=>$products,
            'brands'=>$brands
        ];

    }

    public function ProductSelected($id){
        $categories= Category::all();
        $products_all=Product::all();
        $products_selected=Product::where('category_id',$id)->Paginate(3);
        return $data=[
            'categories'=>$categories,
            'products_all'=>$products_all,
            'products_selected'=>$products_selected
        ];
    }

    public function filter(){
        $categories= Category::all();
        $products= Product::all();
        return $data=[
            'categories'=>$categories,
            'products'=>$products,
        ];
    }
}
