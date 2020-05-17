<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehiculoRequest;
use App\Http\Requests\VehiculoEdit;
use Illuminate\Http\Request;
use App\Alumno;
use App\Vehiculo;
use App\Http\Controllers\Utilidades;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vehiculo.index');
    }

     public function create(Request $request){
       $alumno = Alumno::where("matricula","=",$request->matricula)
                         ->firstOrFail();

       return view('vehiculo.create',compact('alumno'));
     }

    public function store(VehiculoRequest $request)
    {
      $vehiculo = new Vehiculo;

      $vehiculo->marca_vehiculo = $request->input('marca_vehiculo');
      $vehiculo->modelo_vehiculo = $request->input('modelo_vehiculo');
      $vehiculo->color_vehiculo = $request->input('color_vehiculo');
      $vehiculo->tipo_vehiculo = $request->input('tipo_vehiculo');
      $vehiculo->placa_vehiculo = $request->input('placa_vehiculo');
      $vehiculo->id_alumno = $request->input('id_alumno');

      $merge = $vehiculo->id_alumno.$vehiculo->placa_vehiculo;
      $qr_code = Utilidades::encryptQR($merge);
      $vehiculo->codigo_qr = $qr_code;

      $vehiculo->save();

      return redirect()->route('vehiculo.index')->with('success','Vehiculo creado y asignado satisfactoriamente');
    }


    public function edit($id_vehiculo)
    {
      $vehiculo = Vehiculo::findOrFail($id_vehiculo);

      return view('vehiculo.edit',compact('vehiculo'));
    }


    public function update(VehiculoEdit $request, $id_vehiculo)
    {
      try{
        $vehiculo = Vehiculo::findOrFail($id_vehiculo);

        $vehiculo->marca_vehiculo = $request->input('marca_vehiculo');
        $vehiculo->modelo_vehiculo = $request->input('modelo_vehiculo');
        $vehiculo->color_vehiculo = $request->input('color_vehiculo');
        $vehiculo->tipo_vehiculo = $request->input('tipo_vehiculo');
        $vehiculo->placa_vehiculo = $request->input('placa_vehiculo');


        $merge = $vehiculo->id_alumno.$vehiculo->placa_vehiculo;
        $qr_code = Utilidades::encryptQR($merge);
        $vehiculo->codigo_qr = $qr_code;

        $vehiculo->save();

        return redirect()->route('admin.index')->with('success','Vehiculo modificado satisfactoriamente');
      }
      catch(Exception $e){
        return redirect()->route('admin.index')->with('error','La placa ya se encuentra en uso');
      }
    }

    public function destroy($id_vehiculo)
    {
        $vehiculo = Vehiculo::findOrFail($id_vehiculo);
        $matricula = $vehiculo->alumnos->matricula;
        Vehiculo::destroy($id_vehiculo);

        return redirect()->route('ga.ver',$matricula)->with('success','El vehiculo ha sido eliminado del sistema');
    }
}
