<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table="brands";

    protected $fillable=[
        'name',
        'description'
    ];

    protected $hidden=['pivot'];


    public function Categories(){
        return $this->belongsToMany(Category::class,'category_brands','brand_id','category_id','id','id');
    }

    public function Product(){
        return $this->hasMany(Product::class,'brand_id','id');
    }
}
