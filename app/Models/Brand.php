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

    // public function Categories(){
    //     return $this->hasMany(Category::class,'brand_id','id');
    // }

    public function Product(){
        return $this->hasMany(Product::class,'brand_id','id');
    }
}
