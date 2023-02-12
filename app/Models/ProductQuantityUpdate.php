<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductQuantityUpdate extends Model{
    use HasFactory;

    protected $table='product_quantity_updates';
    protected $fillable = [
        'productId',
        'quantity',
        'userIdUpdated',
        'description'
    ];
}

