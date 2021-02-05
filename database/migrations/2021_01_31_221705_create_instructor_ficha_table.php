<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorFichaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructor_ficha', function (Blueprint $table) {
            $table->bigInteger('FK_instructor')->unsigned();
            $table->bigInteger('FK_ficha')->unsigned();
            $table->foreign('FK_instructor')->references('id_instructor')->on('instructor');
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
        Schema::dropIfExists('instructor_ficha');
    }
}
