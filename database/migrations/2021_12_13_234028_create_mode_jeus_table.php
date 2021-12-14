<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeJeusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mode_jeux', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jeu_id')->unsigned()->index();
            $table->bigInteger('mode_id')->unsigned()->index();

            $table->foreign('jeu_id')->references('id')->on('jeux');
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
        Schema::dropIfExists('mode_jeux');
    }
}