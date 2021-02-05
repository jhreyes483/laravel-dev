<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructor', function (Blueprint $table) {
            $table->id('id_instructor');
            $table->string('nom1', '10');
            $table->string('nom2','10');
            $table->string('ape1','10');
            $table->string('ape2','10');
            $table->string('estado','2');
            $table->string('correo','30');
            $table->string('fechaNacimiento','10');
            $table->string('genero','2');
            $table->binary('foto');
            $table->string('tipoDoc','2');
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
        Schema::dropIfExists('instructor');
    }
}
