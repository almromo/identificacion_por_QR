<?php

namespace App\Http\Controllers;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create(Request $request){
       $alumno = Alumno::where("matricula","=",$request->matricula)
                         ->firstOrFail();

       return view('vehiculo.create',compact('alumno'));
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $vehiculo = new Vehiculo;

      $vehiculo->marca_vehiculo = $request->input('marca_vehiculo');
      $vehiculo->modelo_vehiculo = $request->input('modelo_vehiculo');
      $vehiculo->color_vehiculo = $request->input('color_vehiculo');
      $vehiculo->tipo_vehiculo = $request->input('tipo_vehiculo');
      $vehiculo->placa_vehiculo = $request->input('placa_vehiculo');
      $vehiculo->id_alumno = $request->input('id_alumno');

      $merge = $vehiculo->id_alumno.$vehiculo->numero_serie;
      $qr_code = Utilidades::encryptQR($merge);
      $vehiculo->codigo_qr = $qr_code;

      $vehiculo->save();

      return redirect()->route('vehiculo.index')->with('success','Vehiculo creado y asignado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
