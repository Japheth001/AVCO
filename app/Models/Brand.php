<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Brand extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'brand_name',
        'slug',
        'brand_image',
        'status',
       
    ];

    // public function user(){
    //     return $this->hasOne(Category::class, 'brand_name','id');
    //   }
}
