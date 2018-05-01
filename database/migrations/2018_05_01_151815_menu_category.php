<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MenuCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menuCategory', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
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
        Schema::dropIfExists('menuCategory');
    }
}
