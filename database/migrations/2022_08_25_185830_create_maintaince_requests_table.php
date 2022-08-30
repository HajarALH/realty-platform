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
        Schema::create('maintaince_requests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('code');
            $table->unsignedBigInteger('client_id');
            //$table->foreign('client_id')->references('id')->on('clients');
            $table->float('price');
            $table->string('message');
            $table->unsignedBigInteger('property_id');
            //$table->foreign('property_id')->references('id')->on('properties');
            $table->string('status');
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
        Schema::dropIfExists('maintaince_requests');
    }
};
