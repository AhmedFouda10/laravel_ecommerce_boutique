<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Repository\Modules\Website\WebsiteInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $websiteInterface;
    public function __construct(WebsiteInterface $websiteInterface)
    {
        $this->websiteInterface=$websiteInterface;
    }
    public function index()
    {
        $data=$this->websiteInterface->all();
        $categories=$data['categories'];
        $products=$data['products'];
        return view('home',compact('categories','products'));
    }
}
