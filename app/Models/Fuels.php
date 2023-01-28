<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fuels extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'truck_no',
        'station',
        'gallons',
        'price',
        'date',
        'receipt'
               
    ];

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
