<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NTrip extends Model
{
    use HasFactory;

    protected $fillable = [
        'no',
        'kmsbf',
        'startdate',
        'enddate',
        'tripdays',
        'truckno',
        'trailerno',
        'driver',
        'turnboy',

        'gofrom',
        'goto',
        'gocargodet',
        'goamt',
        'goinvoice',
        'gopaydet',
        'goreceipt',


        'returnfrom',
        'returnto',
        'cargodet',
        'amt',
        'invo',
        'paymentdet',
        'receiptno',


        'returnfrom2',
        'returnto2',
        'cargodet2',
        'amt2',
        'invo2',
        'paymentdet2',
        'receiptno2',



        'fuelallocfrom',
        'fuelallocto',
        'fuelallockms',
        'fuelallocratio',
        'fuelalloclitres',


        'fuelsupdate',
        'fuelsupstation',
        'fuelsuplitres',
        'fuelsupauthority',
        'fuelsupbalance',


        'expensedate',
        'amount',
        'location',
        'reason',
        'authority',

     ];

     public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
