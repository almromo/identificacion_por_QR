<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlumnoRequest;
use Illuminate\Http\Request;
use App\Alumno;
use App\Http\Controllers\Utilidades;

class AlumnoController extends Controller
{

    public function index(){
      return view('alumno.create');
    }

    public function create()
    {
        return view('alumno.create');
    }

    public function store(AlumnoRequest $request,Utilidades $utilidades){
      $alumno = new Alumno;

      $alumno->matricula = $request->input('matricula');
      $alumno->nombre = $request->input('nombre');
      $alumno->apellido_paterno = $request->input('apellido_paterno');
      $alumno->apellido_materno = $request->input('apellido_materno');

      $merge = $alumno->matricula.$alumno->nombre.$alumno->apellido_paterno.$alumno->apellido_materno;
      $qr_code = $utilidades->encryptQR($merge);
      $alumno->codigo_qr = $qr_code;

      $alumno->save();

      return redirect()->route('alumno.create')->with('success','Alumno creado satisfactoriamente');

    }

}
