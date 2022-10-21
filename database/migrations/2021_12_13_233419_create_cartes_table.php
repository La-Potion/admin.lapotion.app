<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartes', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->text('subix');
            $table->boolean('display')->default(false);
            $table->boolean('commun')->default(false);
            $table->text('question_bis')->nullable();
            $table->integer('joueurs')->default(0);
            $table->char('type_ref', 2)->index();
            $table->bigInteger('duree_id')->unsigned();
            $table->bigInteger('special_id')->unsigned();
            $table->timestamps();

            $table->foreign('type_ref')->references('type_ref')->on('types');
            $table->foreign('duree_id')->references('id')->on('durees');
            $table->foreign('special_id')->references('id')->on('specials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartes');
    }
}
