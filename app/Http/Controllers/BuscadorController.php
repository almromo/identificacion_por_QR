<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

class BuscadorController extends Controller
{

  public function buscar(Request $request){

    $alumno = Alumno::where("matricula",'like',$request->search.'%')->take(2)->get();

    $response = array();
    foreach($alumno as $value){
      $response[] = array("label" => $value->matricula);
    }

    return json_encode($response);
  }

}
