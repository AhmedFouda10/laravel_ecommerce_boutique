<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Repository\Modules\Website\WebsiteInterface;

class ShopController extends Controller
{
    public $websiteInterface;
    public function __construct(WebsiteInterface $websiteInterface)
    {
        $this->websiteInterface=$websiteInterface;
    }
    public function index(){
        $data=$this->websiteInterface->shop();
        $categories=$data['categories'];
        $products=$data['products'];
        $brands=$data['brands'];
        return view('website.shop.shop',compact('categories','products','brands'));
    }

    public function ProductSelected($id){
        $data=$this->websiteInterface->ProductSelected($id);
        $categories=$data['categories'];
        $products_all=$data['products_all'];
        $products_selected=$data['products_selected'];
        return view('website.shop.shop_product_selected',compact('categories','products_all','products_selected'));
    }

    public function ShopPage(){
        return view('website.shop.shop',compact('categories','products','lengthPage'));
    }

    public function filter(Request $request)
    {
        $data=$this->websiteInterface->filter();
        $categories=$data['categories'];
        $products=$data['products'];
        $minproduct=$request->minproduct;
        $maxproduct=$request->maxproduct;
        $filterproduct=Product::whereBetween('price', [$minproduct, $maxproduct])->get();

        dd($filterproduct);

        // return view('website.shop.shop_filterProduct',compact('categories','products','filterproduct'));

    }
}
