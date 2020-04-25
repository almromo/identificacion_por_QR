<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log_registros_alumnos extends Model
{
    protected $table = 'log_registros_alumnos';
    protected $primaryKey = 'id_log';

    public function alumnos(){
      return $this->belongsTo('App\Alumno','id_alumno');
    }

    public function equipos(){
      return $this->belongsTo('App\Equipo','id_equipo');
    }

    public function vehiculos(){
      return $this->belongsTo('App\Vehiculo','id_vehiculo');
    }
}
