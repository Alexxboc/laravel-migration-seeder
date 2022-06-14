<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->decimal('price', 6, 2)->nullable();
            $table->string('city', 50)->nullable();
            $table->text('description')->nullable();
            $table->string('type', 50)->nullable();
            $table->string('image',255)->nullable();
            $table->boolean('is-available')->default(false);
            $table->string('location', 50)->nullable();
            $table->string('season', 10)->nullable();
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
        Schema::dropIfExists('travels');
    }
}

/* 
Travel
title
price
city
description
type
image
is_available
location
season



*/