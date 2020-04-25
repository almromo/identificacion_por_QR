<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
          $table->bigIncrements('id_vehiculo');
          $table->string('marca_vehiculo',75);
          $table->string('modelo_vehiculo',75);
          $table->string('color_vehiculo',45);
          $table->string('tipo_vehiculo',50);
          $table->string('placa_vehiculo',50)->unique();
          $table->string('codigo_qr',500)->unique();
          $table->timestamps();
          $table->bigInteger('id_alumno')->unsigned();
          $table->bigInteger('id_docente')->unsigned();
          $table->bigInteger('id_trabajador')->unsigned();

          $table->foreign('id_alumno')->references('id_alumno')->on('alumnos');
          $table->foreign('id_docente')->references('id_docente')->on('docentes');
          $table->foreign('id_trabajador')->references('id_trabajador')->on('trabajadores');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
