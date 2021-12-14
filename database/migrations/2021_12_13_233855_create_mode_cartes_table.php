<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeCartesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mode_cartes', function (Blueprint $table) {
            $table->bigInteger('carte_id')->unsigned()->index();
            $table->bigInteger('mode_id')->unsigned()->index();

            $table->foreign('carte_id')->references('id')->on('cartes');
            $table->foreign('mode_id')->references('id')->on('modes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mode_cartes');
    }
}