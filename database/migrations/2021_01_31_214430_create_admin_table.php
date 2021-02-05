<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id('id_admin');
            $table->string('nom1','30');
            $table->string('nom2','10');
            $table->string('ape1','30');
            $table->string('ape2','10');
            $table->string('estado','3');
            $table->string('fechaNacimiento','10');
            $table->string('genero','2');
            $table->binary('foto');
            $table->string('password','150');
            $table->string('tipoDoc','3');
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
        Schema::dropIfExists('admin');
    }
}
