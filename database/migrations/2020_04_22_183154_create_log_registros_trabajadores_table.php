<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogRegistrosTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_registros_trabajadores', function (Blueprint $table) {
          $table->bigIncrements('id_log');
          $table->dateTime('hora_ingreso');
          $table->dateTime('hora_salida');
          $table->bigInteger('id_trabajador')->unsigned();
          $table->bigInteger('id_equipo')->unsigned();
          $table->bigInteger('id_vehiculo')->unsigned();

          $table->foreign('id_trabajador')->references('id_trabajador')->on('trabajadores');
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
        Schema::dropIfExists('log_registros_trabajadores');
    }
}
