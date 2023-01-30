<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailsController extends Controller
{
    public function index($id){
        $product=Product::where('id',$id)->first();

        $LastView=$product->view;
        $CurrentView=$LastView+1;

        $UpdateView=Product::find($id);
        $UpdateView->view=$CurrentView;
        $UpdateView->update();

        return view('website.shopDetails.details',compact('product'));
    }
}
