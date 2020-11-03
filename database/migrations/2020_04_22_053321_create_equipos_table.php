<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
          $table->bigIncrements('id_equipo');
          $table->string('marca_equipo',75);
          $table->string('modelo_equipo',75);
          $table->string('color_equipo',45);
          $table->string('tipo_equipo',50);
          $table->string('numero_serie',50)->unique();
          $table->string('codigo_qr',500)->unique();
          $table->timestamps();
          $table->bigInteger('id_alumno')->unsigned()->nullable($value = true);
          $table->bigInteger('id_docente')->unsigned()->nullable($value = true);
          $table->bigInteger('id_trabajador')->unsigned()->nullable($value = true);

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
        Schema::dropIfExists('equipos');
    }
}
