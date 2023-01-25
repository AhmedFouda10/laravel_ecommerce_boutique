<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $table="categories";

    protected $fillable=[
        'name',
        'image',
        'description',
    ];


    public function Brands(){
        return $this->belongsToMany(Brand::class,'category_brands','category_id','brand_id','id','id');
    }

    public function Product(){
        return $this->hasMany(Product::class,'category_id','id');
    }
}
