@extends('layouts.app')
@section('title','Adm Alumnos')
@section('content')

<div class="container">

  <div class="row">

    <div class="col-sm-12">
      @if(Session::has('success'))
        <div class="toast" data-autohide="true">
          <div class="toast-header">
            <strong class="mr-auto text-primary">Alerta</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
          </div>
          <div class="toast-body">
            <strong>{{Session::get('success')}}</strong>
          </div>
        </div>
      @endif

      @if(Session::has('error'))
        <div class="toast" data-autohide="true">
          <div class="toast-header">
            <strong class="mr-auto text-primary">Alerta</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
          </div>
          <div class="toast-body">
            <strong>{{Session::get('error')}}</strong>
          </div>
        </div>
      @endif
    </div>

  </div>

  <hr>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Alumno</div>
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
