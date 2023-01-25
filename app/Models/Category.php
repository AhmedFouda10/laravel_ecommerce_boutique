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
        // 'brand_id'
    ];

    // public function Brands(){
    //     return $this->belongsTo(Brand::class,'brand_id','id');
    // }

    public function Product(){
        return $this->hasMany(Product::class,'category_id','id');
    }
}
