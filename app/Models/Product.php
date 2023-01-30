<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $table="products";

    protected $fillable=[
        'name',
        'description',
        'image',
        'price',
        'quantity',
        'category_id',
        'brand_id'
    ];

    public function Category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function Brand(){
        return $this->belongsTo(Brand::class,'brand_id','id');
    }

}
