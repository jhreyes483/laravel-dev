<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha', function (Blueprint $table) {
            $table->id('id_ficha'); 
            $table->string('No_ficha','225');
            $table->string('descrip','225');
            $table->string('estado','3');
            //foreign
            $table->bigInteger('FK_jornada')->unsigned();
            $table->bigInteger('FK_prog')->unsigned();
            $table->foreign('FK_jornada')->references('id')->on('jornada');
            $table->foreign('FK_prog')->references('id_prog')->on('programa');
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
        Schema::dropIfExists('ficha');
    }
}
