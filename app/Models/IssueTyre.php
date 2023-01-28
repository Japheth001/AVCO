<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tyres;
class IssueTyre extends Model
{
    use HasFactory;
    protected $fillable = [
        'issue_to',
        'driverid',
        'numberplate_id',
         'status',
    ];

    public function tyre(){
        return $this->belongsTo(Tyres::class);
    }
}
