<?php
namespace App\Repository\Modules\Website;

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
        $products=Product::paginate(9);
        return $data=[
            'categories'=>$categories,
            'products'=>$products,
        ];

    }

    public function ProductSelected($name){
        $categories= Category::all();
        $products_all=Product::all();
        $products_selected=Product::where('name',$name)->get();
        return $data=[
            'categories'=>$categories,
            'products_all'=>$products_all,
            'products_selected'=>$products_selected
        ];
    }


}
