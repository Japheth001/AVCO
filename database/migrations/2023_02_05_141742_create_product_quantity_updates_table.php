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
        Schema::create('product_quantity_updates', function (Blueprint $table) {
            $table->id();
            $table->string('quantity')->nullable();
            $table->unsignedBigInteger('productId')->nullable();
            $table->foreign('productId')->references('id')->on('products');
            $table->unsignedBigInteger('userIdUpdated')->nullable();
            $table->foreign('userIdUpdated')->references('id')->on('users');            
            $table->longText('description', 10000)->nullable();
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
        Schema::dropIfExists('product_quantity_updates');
    }
};
