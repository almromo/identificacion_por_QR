@extends('layouts.app')
@section('title','Adm Alumnos')
@section('content')

<div class="container">

  @if ($errors->any())
    <div class="row">
      <div class="col-xs-12 col-md-12">
        <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
            {{ $error }}<br>
          @endforeach
        </div>
      </div>
    </div>
  @endif

  @if(Session::has('success'))
      <div class="alert alert-info">
        {{Session::get('success')}}
      </div>
  @endif

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Asignar Equipo</div>
                  <div class="card-body">

                    <form method="get" action="{{route('equipo.create')}}" role="form">
                      @csrf
                      <div class="row">
                        <div class="col-xs-12 col-md-12">
                          <label for="Matricula">Matricula de Alumno</label>
                          <input onload="autocomplete()" type="text" id="autocomplete" name="matricula" autocomplete="off" class="form-control" placeholder="Introduzca una matricula de un alumno existente"  required>
                        </div>
                			  <div class="col-sm-12">
                						<div id="resultadoBusqueda"></div>
                        </div>
                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-12 text-center">
                          <input type="submit" class="btn btn-lg btn-success" value="Buscar Alumno">
                        </div>
                      </div>




                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
