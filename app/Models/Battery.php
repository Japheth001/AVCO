<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Battery extends Model
{
    use HasFactory;

    protected $fillable = [
        'truck_id',
        'avco',
        'serial_no',
        'make',
        'size',
        'status',
        'supplier',
        'date_purchased',
        'price',
        'date_install',
        'verified_date',
        'movement',
        'comments',
               
    ];

    public function truck(){
        return $this->hasOne(Vehicle::class, 'truck_id','id');
    }

}
