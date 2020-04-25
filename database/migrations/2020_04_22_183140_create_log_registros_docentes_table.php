<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogRegistrosDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_registros_docentes', function (Blueprint $table) {
          $table->bigIncrements('id_log');
          $table->dateTime('hora_ingreso');
          $table->dateTime('hora_salida');
          $table->bigInteger('id_docente')->unsigned();
          $table->bigInteger('id_equipo')->unsigned();
          $table->bigInteger('id_vehiculo')->unsigned();

          $table->foreign('id_docente')->references('id_docente')->on('docentes');
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
        Schema::dropIfExists('log_registros_docentes');
    }
}
