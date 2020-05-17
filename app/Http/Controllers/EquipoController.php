<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipoRequest;
use App\Http\Requests\EquipoEdit;
use Illuminate\Http\Request;
use App\Equipo;
use App\Alumno;
use App\Http\Controllers\Utilidades;

class EquipoController extends Controller
{

    public function index(){
      return view('equipo.index');
    }

    public function create(Request $request){
      $alumno = Alumno::where("matricula","=",$request->matricula)
                        ->firstOrFail();

      return view('equipo.create',compact('alumno'));
    }

    public function store(EquipoRequest $request){
      $equipo = new Equipo;

      $equipo->marca_equipo = $request->input('marca_equipo');
      $equipo->modelo_equipo = $request->input('modelo_equipo');
      $equipo->color_equipo = $request->input('color_equipo');
      $equipo->tipo_equipo = $request->input('tipo_equipo');
      $equipo->numero_serie = $request->input('numero_serie');
      $equipo->id_alumno = $request->input('id_alumno');

      $merge = $equipo->id_alumno.$equipo->numero_serie;
      $qr_code = Utilidades::encryptQR($merge);
      $equipo->codigo_qr = $qr_code;

      $equipo->save();

      return redirect()->route('equipo.index')->with('success','Equipo creado y asignado satisfactoriamente');
    }

    public function edit($id_equipo){
      $equipo = Equipo::findOrFail($id_equipo);

      return view('equipo.edit',compact('equipo'));

    }

    public function update(EquipoEdit $request,$id_equipo){
      try{
        $equipo = Equipo::findOrFail($id_equipo);

        $equipo->marca_equipo = $request->input('marca_equipo');
        $equipo->modelo_equipo = $request->input('modelo_equipo');
        $equipo->color_equipo = $request->input('color_equipo');
        $equipo->tipo_equipo = $request->input('tipo_equipo');
        $equipo->numero_serie = $request->input('numero_serie');

        $merge = $equipo->id_alumno.$equipo->numero_serie;
        $qr_code = Utilidades::encryptQR($merge);
        $equipo->codigo_qr = $qr_code;

        $equipo->save();

        return redirect()->route('admin.index')->with('success','Equipo modificado satisfactoriamente');
      }
      catch(Exception $e){
         return redirect()->route('admin.index')->with('error','<strong>Error!</strong> El número de serie ya existe');
      }

    }

    public function destroy($id_equipo){
      $equipo = Equipo::findOrFail($id_equipo);
      $matricula = $equipo->alumnos->matricula;
      Equipo::destroy($id_equipo);

      return redirect()->route('ga.ver',$matricula)->with('success','El equipo fue borrado permanentemente del sistema');

    }
}
