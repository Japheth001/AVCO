<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\IssueTyre;

class Tyres extends Model
{
    use HasFactory;

    protected $fillable = [
        'front_or_back_tyre',
        'tyre_serial',
        'size',
        'manufacturer',
        'status',
    ];

    public function user(){
        return $this->hasOne(IssueTyre::class, 'id','user_id');
      }
     }
