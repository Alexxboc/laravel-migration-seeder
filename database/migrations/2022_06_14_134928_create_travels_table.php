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
            $table->decimal('price', 6, 2);
            $table->string('city', 50);
            $table->text('description');
            $table->string('type', 50);
            $table->string('image',255);
            $table->boolean('is-available')->default(false);
            $table->string('location', 50);
            $table->string('season', 10);
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