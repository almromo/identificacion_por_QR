<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
  protected $table = 'trabajadores';
  protected $primaryKey = 'id_trabajador';

  public function vehiculos(){
    return $this->hasMany('App\Vehiculo','id_trabajador','id_trabajador');
  }

  public function equipos(){
    return $this->hasMany('App\Equipo','id_trabajador','id_trabajador');
  }

  public function log_registros_trabajadores(){
    return $this->hasMany('App\Log_registros_trabajadores','id_trabajador','id_trabajador');
  }
}
