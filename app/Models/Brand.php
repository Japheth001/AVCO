<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Brand extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'brand_name',
        'brand_image',
       
    ];

    // public function user(){
    //     return $this->hasOne(Category::class, 'brand_name','id');
    //   }
}
