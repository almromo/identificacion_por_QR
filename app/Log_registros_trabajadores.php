<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log_registros_trabajadores extends Model
{
  protected $table = 'Log_registros_trabajadores';
  protected $primaryKey = 'id_log';

  public function trabajadores(){
    return $this->belongsTo('App\Trabajador','id_trabajador');
  }

  public function equipos(){
    return $this->belongsTo('App\Equipo','id_equipo');
  }

  public function vehiculos(){
    return $this->belongsTo('App\Vehiculo','id_vehiculo');
  }
}
