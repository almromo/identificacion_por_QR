<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

class GestionadorAlumnosController extends Controller
{
    public function index(){
      return view('alumno.gestionar');
    }

    public function ver(Request $request){

      $matricula = $request->matricula;

      $alumno = Alumno::where("matricula","=",$matricula)
                        ->firstOrFail();

      return view('alumno.ver',compact('alumno'));

    }
}
