<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlumnoRequest;
use App\Http\Requests\AlumnoEdit;
use Illuminate\Http\Request;
use App\Alumno;
use App\Http\Controllers\Utilidades;
use Exception;

class AlumnoController extends Controller
{

    public function index(){
      return view('alumno.create');
    }

    public function create()
    {
      return view('alumno.create');
    }

    public function show($matricula){
      $alumno = Alumno::where('matricula',$matricula)->firstOrFail();

      return view('alumno.ver',compact('alumno'));
    }

    public function store(AlumnoRequest $request){
      $alumno = new Alumno;

      $alumno->matricula = $request->input('matricula');
      $alumno->nombre = $request->input('nombre');
      $alumno->apellido_paterno = $request->input('apellido_paterno');
      $alumno->apellido_materno = $request->input('apellido_materno');

      $merge = $alumno->matricula.$alumno->nombre.$alumno->apellido_paterno.$alumno->apellido_materno;
      $qr_code = Utilidades::encryptQR($merge);
      $alumno->codigo_qr = $qr_code;

      $alumno->save();

      return redirect()->route('admin.index')->with('success','Alumno creado satisfactoriamente');

    }

    public function edit($matricula){

      $alumno = Alumno::where('matricula',$matricula)->firstOrFail();

      return view('alumno.edit',compact('alumno'));

    }

    public function update(AlumnoEdit $request,$id_alumno){
      try{
        $alumno = Alumno::findOrFail($id_alumno);

        $alumno->matricula = $request->input('matricula');
        $alumno->nombre = $request->input('nombre');
        $alumno->apellido_paterno = $request->input('apellido_paterno');
        $alumno->apellido_materno = $request->input('apellido_materno');

        $merge = $alumno->matricula.$alumno->nombre.$alumno->apellido_paterno.$alumno->apellido_materno;
        $qr_code = Utilidades::encryptQR($merge);
        $alumno->codigo_qr = $qr_code;

        $alumno->save();

        return redirect()->route('admin.index')->with('success','Alumno modificado satisfactoriamente');
      }
      catch(Exception $e){
         return redirect()->route('admin.index')->with('error','Error! No puedes cambiar la matricula a una ya existente');
      }

    }

    public function destroy($id_alumno){
      Alumno::destroy($id_alumno);

      return redirect()->route('admin.index')->with('success','El alumno fue borrado permanentemente del sistema');

    }

    public function search(Request $request){

      return redirect()->route('alumno.show',['alumno' => $request->matricula]);
    }

}
