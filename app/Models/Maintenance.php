<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'truck_no',
        'date',
        'description',
        'amount',
        'status',
        'expensedate',
        'location',
        'authority'
        // 'provider',
        // 'contact',
        // 'labour_cost',
        // 'material_cost',
               
    ];
    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    
}
