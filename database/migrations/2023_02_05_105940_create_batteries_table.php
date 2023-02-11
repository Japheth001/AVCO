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
        if (!Schema::hasTable('batteries')) {
            Schema::create('batteries', function (Blueprint $table) {
                $table->id();

                $table->unsignedBigInteger('truck_id');
                $table->string('avco')->nullable();
                ;
                $table->string('serial_no')->nullable();
                ;
                $table->string('make');
                $table->string('size');
                $table->string('status');
                $table->string('supplier')->nullable();
                ;
                $table->date('date_purchased')->nullable();
                ;
                $table->string('price')->nullable();
                ;
                $table->string('date_install')->nullable();
                ;
                $table->date('verified_date')->nullable();
                $table->string('movement')->nullable();
                ;
                $table->string('comments')->nullable();
                ;

                $table->foreign('truck_id')->references('id')->on('vehicles')->onDelete('cascade');
                $table->timestamps();


            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batteries');
    }
};
