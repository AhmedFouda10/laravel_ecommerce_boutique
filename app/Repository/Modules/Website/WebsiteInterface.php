<?php
namespace App\Repository\Modules\Website;


interface WebsiteInterface{
    public function all();
    public function shop();
    public function ProductSelected($name);
}
