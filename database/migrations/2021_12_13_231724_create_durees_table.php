<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDureesTable extends Migration
{
    public function up()
    {
        Schema::create('durees', function (Blueprint $table) {
            $table->id();
            $table->string('unite')->nullable();
            $table->boolean('tour')->nullable();
            $table->text('other')->nullable();
            $table->integer('nombre')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('durees');
    }
}