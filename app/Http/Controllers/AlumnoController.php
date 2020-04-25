<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlumnoRequest;
use Illuminate\Http\Request;
use App\Alumno;
use App\Http\Controllers\Utilidades;

class AlumnoController extends Controller
{

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

      return redirect('/admin/alumno/crear');

    }

    public function buscar(Request $request){

      $alumno = Alumno::where("matricula",'like',$request->search.'%')->take(2)->get();

      $response = array();
      foreach($alumno as $value){
        $response[] = array("label" => $value->matricula);
      }

      return json_encode($response);
    }

    public function showByMatricula($matricula){

      $alumno = Alumno::where("matricula","=",$matricula)
                        ->firstOrFail();

      return $alumno;

    }

    public function verAlumnoEquipo(Request $request){

      $matricula = $request->matricula;

      $alumno = $this->showByMatricula($matricula);

      return view('alumnos.crear_equipo',compact('alumno'));

    }

    public function verAlumno(Request $request){

      $matricula = $request->matricula;

      $alumno = $this->showByMatricula($matricula);

      return view('alumnos.ver',compact('alumno'));

    }
}
