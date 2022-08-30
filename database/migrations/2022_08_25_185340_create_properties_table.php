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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('status');
            $table->unsignedBigInteger('city_id');
            //$table->foreign('city_id')->references('id')->on('cities');
            $table->unsignedBigInteger('propertygroups_id');
            $table->unsignedBigInteger('user_id');
            $table->string('location_long');
            $table->string('location_lat');
            $table->boolean('amdin_approval');
            $table->float('daily_price');
            $table->float('monthly_price');
            $table->float('annual_price');
            $table->boolean('electricity_included');
            $table->boolean('water_included');
            $table->boolean('wifi_included');
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
        Schema::dropIfExists('properties');
    }
};
