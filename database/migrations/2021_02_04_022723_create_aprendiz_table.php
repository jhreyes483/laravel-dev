<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprendizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendiz', function (Blueprint $table) {
            $table->id('id_aprendiz');
            $table->string('nom1', '20');
            $table->string('nom2','20');
            $table->string('ape1','20');
            $table->string('ape2','20');
            $table->string('estado','2');
            $table->string('correo','30');
            $table->string('fechaNacimiento','20');
            $table->string('genero','2');
            $table->binary('foto');
            $table->string('tipoDoc','2');
            $table->bigInteger('FK_ficha')->unsigned();
            $table->foreign('FK_ficha')->references('id_ficha')->on('ficha');
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
        Schema::dropIfExists('aprendiz');
    }
}
