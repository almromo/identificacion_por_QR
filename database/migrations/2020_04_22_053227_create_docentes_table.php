<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
          $table->bigIncrements('id_docente');
          $table->string('numero_empleado',50)->unique();
          $table->string('nombre',50);
          $table->string('apellido_paterno',50);
          $table->string('apellido_materno',50);
          $table->string('codigo_qr',500)->unique();
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
        Schema::dropIfExists('docentes');
    }
}
