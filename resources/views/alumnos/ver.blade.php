@extends('layouts.app')
@section('title','Adm Alumnos')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Crear Alumno</div>
                  <div class="card-body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Información Alumno</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Información Equipo</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Información Vehículo</a>
                        </li>
                      </ul>
                      <div class="row">
                        <div class="col-xs-12 col-md-6">
                          <div class="col-xs-12 col-md-12">
                            <label class="display-4"><div class="font-weight-bold">Matricula:</div> {{$alumno->matricula}}</label>
                            <hr>
                            <label class="display-4"><div class="font-weight-bold">Nombre:</div> {{$alumno->nombre}}</label>
                            <hr>
                            <label class="display-4"><div class="font-weight-bold">Apellido Paterno:</div> {{$alumno->apellido_paterno}}</label>
                            <hr>
                            <label class="display-4"><div class="font-weight-bold">Apellido Materno:</div> {{$alumno->apellido_materno}}</label>
                            <hr>
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                          <div class="col-xs-12 col-md-12">
                            <label class="display-4"><div class="font-weight-bold">Código QR:</div></label>
                            <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(500)->generate($alumno->codigo_qr)) !!} ">
                          </div>
                        </div>

                        <hr>

                        <div class="row">
                          <div class="col-xs-12 col-md-12">
                            <div class="col-md-6">
                              <a href="#" class="btn btn-warning">Modificar</a>
                            </div>
                            <div class="col-md-6">
                              <a href="#" class="btn btn-danger">Eliminar</a>
                            </div>
                          </div>
                        </div>


                      </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
