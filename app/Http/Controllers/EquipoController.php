<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipoRequest;
use Illuminate\Http\Request;
use App\Equipo;
use App\Http\Controllers\Utilidades;

class EquipoController extends Controller
{
    public function store(EquipoRequest $request,Utilidades $utilidades,$id_alumno){
      $equipo = new Equipo;

      $equipo->marca_equipo = $request->input('marca_equipo');
      $equipo->modelo_equipo = $request->input('modelo_equipo');
      $equipo->color_equipo = $request->input('color_equipo');
      $equipo->tipo_equipo = $request->input('tipo_equipo');
      $equipo->numero_serie = $request->input('numero_serie');
      $equipo->id_alumno = $id_alumno;

      $merge = $id_alumno.$equipo->numero_serie;
      $qr_code = $utilidades->encryptQR($merge);
      $equipo->codigo_qr = $qr_code;

      $equipo->save();

      return redirect('/admin');
    }
}
