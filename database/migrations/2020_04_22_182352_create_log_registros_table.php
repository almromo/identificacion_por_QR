<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_registros_alumnos', function (Blueprint $table) {
            $table->bigIncrements('id_log');
            $table->dateTime('hora_ingreso');
            $table->dateTime('hora_salida');
            $table->bigInteger('id_alumno')->unsigned();
            $table->bigInteger('id_equipo')->unsigned();
            $table->bigInteger('id_vehiculo')->unsigned();

            $table->foreign('id_alumno')->references('id_alumno')->on('alumnos');
            $table->foreign('id_equipo')->references('id_equipo')->on('equipos');
            $table->foreign('id_vehiculo')->references('id_vehiculo')->on('vehiculos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_registros');
    }
}
