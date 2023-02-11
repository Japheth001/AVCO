<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\IssueTyre;

class Tyres extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'front_or_back_tyre',
        'tyre_serial',
        'size',
        'manufacturer',
        'status',
        'issue_to',
        'driverid',
        'numberplate_id',
    ];

    public function user(){
        return $this->hasOne(User::class, 'id','user_id');
      }

   


      public function issue()
      {
          return $this->hasOne(IssueTyre::class);
      }
     }

    