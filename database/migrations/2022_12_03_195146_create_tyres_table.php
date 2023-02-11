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
        Schema::create('tyres', function (Blueprint $table) {
            // $table->id();
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('front_or_back_tyre');
            $table->string('tyre_serial');
            $table->string('size');
            $table->string('manufacturer');
            $table->string('status');
            $table->string('issue_to');
            $table->string('driver_id');
            $table->string('number_plate');
            $table->softDeletes();
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
        Schema::dropIfExists('tyres');
    }
};
