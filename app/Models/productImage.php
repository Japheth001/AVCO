<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productImage extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'product_id',
        'image'
    ];
}
