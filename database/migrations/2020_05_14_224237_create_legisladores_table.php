<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegisladoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legisladores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('pais');
            $table->bigInteger('votos');
            $table->bigInteger('partido_id')->unsigned();
            $table->foreign('partido_id')->references('id')->on('partidos');
            $table->date('inicioMandato');
            $table->date('finMandato');
            $table->boolean('automatico');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legisladores');
    }
}
