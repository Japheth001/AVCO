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
        Schema::create('mantains', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->foreignId('user_id');
            $table->string('truck_no');
            
            $table->string('description');
            // $table->string('provider');
            // $table->string('contact_no');
            // $table->string('labour_cost');
            // $table->string('material_cost');
            $table->date('date');

            
            $table->date('amount')->nullable();
            $table->date('expensedate')->nullable();
            $table->date('location')->nullable();
            $table->date('status')->nullable();
            $table->date('approvecomments')->nullable();
            $table->date('authority')->nullable();
            // $table->string('receipt');
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
        Schema::dropIfExists('mantains');
    }
};
