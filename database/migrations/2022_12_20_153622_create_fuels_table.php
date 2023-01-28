<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuels', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();

            $table->bigInteger('id');
            $table->string('user_id');
            $table->string('truck_no');
            $table->string('station');
            $table->string('gallons');
            $table->string('price');
            $table->date('date');
            $table->string('receipt');
            $table->timestamps();
            $table->SoftDeletes();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fuels');
    }
};
