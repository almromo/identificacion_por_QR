<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log_registros_docentes extends Model
{
  protected $table = 'log_registros_docentes';
  protected $primaryKey = 'id_log';

  public function docente(){
    return $this->belongsTo('App\Docente','id_docente');
  }

  public function equipos(){
    return $this->belongsTo('App\Equipo','id_equipo');
  }

  public function vehiculos(){
    return $this->belongsTo('App\Vehiculo','id_vehiculo');
  }
}
