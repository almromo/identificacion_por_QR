<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
  protected $table = 'docentes';
  protected $primaryKey = 'id_docente';

  public function vehiculos(){
    return $this->hasMany('App\Vehiculo','id_docente','id_docente');
  }

  public function equipos(){
    return $this->hasMany('App\Equipo','id_docente','id_docente');
  }

  public function log_registros_docentes(){
    return $this->hasMany('App\log_registros_docentes','id_docente','id_docente');
  }
}
