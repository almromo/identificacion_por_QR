<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
  protected $table = 'equipos';
  protected $primaryKey = 'id_equipo';

  public function alumnos(){
    return $this->belongsTo('App\Alumno','id_alumno');
  }

  public function docentes(){
    return $this->belongsTo('App\Docente','id_docente');
  }

  public function trabajadores(){
    return $this->belongsTo('App\Trabajador','id_trabajador');
  }

  public function log_registros_docentes(){
    return $this->hasMany('App\log_registros_docentes','id_docente','id_docente');
  }

  public function log_registros_trabajadores(){
    return $this->hasMany('App\Log_registros_trabajadores','id_trabajador','id_trabajador');
  }

  public function log_registros_alumno(){
    return $this->hasMany('App\Log_registros_alumnos','id_alumno','id_alumno');
  }

}
