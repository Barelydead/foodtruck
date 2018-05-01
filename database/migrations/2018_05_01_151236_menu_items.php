<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MenuItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menuItems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('price');
            $table->unsignedInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('category');
            $table->unsignedInteger('truck_id')->nullable();
            $table->foreign('truck_id')->references('id')->on('foodtrucks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menuItems');
    }
}
