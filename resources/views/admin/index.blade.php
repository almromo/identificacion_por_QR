@extends('layouts.app')
@section('title','Administración')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Menú</div>

                <!--Inicia seccion de Alumnos-->
                <div class="card-body">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <div class="card">
                        <img class="card-img-top sprite-personas" id="alumno-mujer" >
                        <div class="card-body">
                          <h4 class="card-title">Nuevo Alumno</h4>
                          <p class="card-text">Crea un nuevo alumno en el sistema</p>
                          <a href="{{route('alumno.create')}}" class="btn btn-success">Crear Alumno</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <div class="card">
                        <img class="card-img-top img-responsive sprite-cosas" id="equipo-computo">
                        <div class="card-body">
                          <h4 class="card-title">Agregar equipo a un alumno</h4>
                          <p class="card-text">Agrega un equipo de computo y asignalo a un alumno ya existente</p>
                          <a href="{{route('equipo.index')}}" class="btn btn-success">Crear Equipo</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <div class="card">
                        <img class="card-img-top sprite-cosas" id="automovil">
                        <div class="card-body">
                          <h4 class="card-title">Agregar un vehiculo a un alumno</h4>
                          <p class="card-text">Agrega un vehiculo y asignalo a un alumno ya existente</p>
                          <a href="#" class="btn btn-success">Crear Vehiculo</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <div class="card">
                        <img class="card-img-top sprite-cosas" id="lapiz">
                        <div class="card-body">
                          <h4 class="card-title">Administrar alumnos</h4>
                          <p class="card-text">Visualice,Modifique o elimine la información de un alumno ya existente</p>
                          <a href="admin/alumno/gestionar" class="btn btn-warning">Administrar Alumno</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Termina seccion de alumno-->

                  <hr> <!--Barra de división entre secciones-->

                  <!--Inicia seccion de Docentes-->
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <div class="card">
                        <img class="card-img-top sprite-personas" id="docente-hombre">
                        <div class="card-body">
                          <h4 class="card-title">Nuevo Docente</h4>
                          <p class="card-text">Crea un nuevo docente en el sistema</p>
                          <a href="#" class="btn btn-success">Crear Docente</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <div class="card">
                        <img class="card-img-top sprite-cosas" id="equipo-computo">
                        <div class="card-body">
                          <h4 class="card-title">Agregar equipo a un docente</h4>
                          <p class="card-text">Agrega un equipo de computo y asignalo a un docente ya existente</p>
                          <a href="#" class="btn btn-success">Crear Equipo</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <div class="card">
                        <img class="card-img-top sprite-cosas" id="automovil" >
                        <div class="card-body">
                          <h4 class="card-title">Agregar un vehiculo a un docente</h4>
                          <p class="card-text">Agrega un vehiculo y asignalo a un docente ya existente</p>
                          <a href="#" class="btn btn-success">Crear Vehiculo</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <div class="card">
                        <img class="card-img-top sprite-cosas" id="lapiz">
                        <div class="card-body">
                          <h4 class="card-title">Administrar docentes</h4>
                          <p class="card-text">Visualice,Modifique o elimine la información de un docente ya existente</p>
                          <a href="#" class="btn btn-warning">Administrar Docente</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Termina seccion de Docentes-->

                  <hr> <!--Barra de división entre secciones-->

                  <!--Inicia seccion de Trabajadores-->
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <div class="card">
                        <img class="card-img-top sprite-personas" id="trabajador-mujer">
                        <div class="card-body">
                          <h4 class="card-title">Nuevo Trabajador</h4>
                          <p class="card-text">Crea un nuevo trabajador en el sistema</p>
                          <a href="#" class="btn btn-success">Crear Trabajador</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <div class="card">
                        <img class="card-img-top sprite-cosas" id="equipo-computo">
                        <div class="card-body">
                          <h4 class="card-title">Agregar equipo a un trabajador</h4>
                          <p class="card-text">Agrega un equipo de computo y asignalo a un trabajador ya existente</p>
                          <a href="#" class="btn btn-success">Crear Equipo</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <div class="card">
                        <img class="card-img-top sprite-cosas" id="automovil" >
                        <div class="card-body">
                          <h4 class="card-title">Agregar un vehiculo a un trabajador</h4>
                          <p class="card-text">Agrega un vehiculo y asignalo a un trabajador ya existente</p>
                          <a href="#" class="btn btn-success">Crear Vehiculo</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <div class="card">
                        <img class="card-img-top sprite-cosas" id="lapiz">
                        <div class="card-body">
                          <h4 class="card-title">Administrar trabajadores</h4>
                          <p class="card-text">Visualice,Modifique o elimine la información de un trabajador ya existente</p>
                          <a href="#" class="btn btn-warning">Administrar Trabajador</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Termina seccion de Trabajadores-->


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
