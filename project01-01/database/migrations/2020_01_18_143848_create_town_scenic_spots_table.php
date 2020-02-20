<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTownScenicSpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('town_scenic_spots', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('town_id');
            $table->foreign('town_id')->references('id')->on('towns');

            $table->string('spot_name');
            $table->string('spot_img');
            $table->string('spot_url')->nullable();

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
        Schema::dropIfExists('town_scenic_spots');
    }
}
