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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('code');
            $table->Integer('num_of_bedroom');
            $table->Integer('num_of_bathrooms');
            $table->Integer('mum_of_livingrooms');
            $table->Integer('mum_of_kitchen');
            $table->boolean('is_furniture');
            $table->unsignedBigInteger('property_id');
           // $table->foreign('property_id')->references('id')->on('properties');
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
        Schema::dropIfExists('homes');
    }
};
