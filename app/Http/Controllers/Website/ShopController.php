<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return view('website.shop.shop',compact('categories','products'));
    }

    public function ProductSelected($name){
        $data=$this->websiteInterface->ProductSelected($name);
        $categories=$data['categories'];
        $products_all=$data['products_all'];
        $products_selected=$data['products_selected'];
        return view('website.shop.shop_product_selected',compact('categories','products_all','products_selected'));
    }
}
