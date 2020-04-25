<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
  protected $table = 'vehiculos';
  protected $primaryKey = 'id_vehiculo';

  public function alumnos(){
    return $this->belongsTo('App\Alumno','id_alumno');
  }

  public function docentes(){
    return $this->belongsTo('App\Docente','id_docente');
  }

  public function trabajadores(){
    return $this->belongsTo('App\Trabajador','id_trabajador');
  }
}
