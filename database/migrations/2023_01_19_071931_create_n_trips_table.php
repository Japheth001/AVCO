<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('n_trips', function (Blueprint $table) {
            $table->id();
            $table->string('no');
            $table->string('kmsbf');
            $table->string('startdate');
            $table->string('enddate');
            $table->string('tripdays');
            $table->string('truckno');
            $table->string('trailerno');
            $table->string('driver');
            $table->string('turnboy')->nullable();

            $table->string('gofrom');
            $table->string('goto');
            $table->string('gocargodet');
            $table->string('goamt');
            $table->string('goinvoice')->nullable();
            $table->string('gopaydet')->nullable();
            $table->string('goreceipt')->nullable();

           
            $table->string('returnfrom');
            $table->string('returnto');
            $table->string('cargodet');
            $table->string('amt');
            $table->string('invo');
            $table->string('paymentdet');
            $table->string('receiptno')->nullable();

            $table->string('returnfrom2');
            $table->string('returnto2');
            $table->string('cargodet2');
            $table->string('amt2');
            $table->string('invo2');
            $table->string('paymentdet2');
            $table->string('receiptno2')->nullable();


            $table->string('fuelallocfrom')->nullable();
            $table->string('fuelallocto')->nullable();
            $table->string('fuelallockms')->nullable();
            $table->string('fuelallocratio')->nullable();
            $table->string('fuelalloclitres')->nullable();


            $table->string('fuelsupdate')->nullable();
            $table->string('fuelsupstation')->nullable();
            $table->string('fuelsuplitres')->nullable();
            $table->string('fuelsupauthority')->nullable();
            $table->string('fuelsupbalance')->nullable();

            $table->date('expensedate')->nullable();
            $table->string('amount')->nullable();
            $table->string('location')->nullable();
            $table->string('reason')->nullable();
            $table->string('authority')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('n_trips');
    }
};
