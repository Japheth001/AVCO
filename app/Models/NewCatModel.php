<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class NewCatModel extends Model
{
    use HasFactory;

    protected $table = 'new_cat_models';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'status'
    ];

    public function products(){
        return $this->hasMany(Products::class, 'category_id', 'id');
    }
}
