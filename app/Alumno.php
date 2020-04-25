<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
  protected $table = 'alumnos';
  protected $primaryKey = 'id_alumno';
  protected $fillable = ['matricula','nombre','apellido_paterno','apellido_materno'];

  public function vehiculos(){
    return $this->hasMany('App\Vehiculo','id_alumno','id_alumno');
  }

  public function equipos(){
    return $this->hasMany('App\Equipo','id_alumno','id_alumno');
  }

  public function log_registros_alumno(){
    return $this->hasMany('App\Log_registros_alumnos','id_alumno','id_alumno');
  }

}
