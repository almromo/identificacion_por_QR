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
                          <a class="nav-link active" data-toggle="tab" href="#alumno">Información Alumno</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#equipo">Información Equipo</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#vehiculo">Información Vehículo</a>
                        </li>
                      </ul>

                      <br>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane container active" id="alumno">
                          @include('alumno.gestion.alumno')
                        </div>
                        <div class="tab-pane container fade" id="equipo">
                          @include('alumno.gestion.equipo')
                        </div>
                        <div class="tab-pane container fade" id="vehiculo">
                          @include('alumno.gestion.vehiculo')
                        </div>
                      </div>


                        <hr>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
