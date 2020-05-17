@extends('layouts.app')
@section('title','Adm Alumnos')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Crear Alumno</div>
                  <div class="card-body">

                    <div class="row">
                      <div class="col-xs-12 col-md-12">
                        <div class="alert alert-warning">
                          <strong>Consejo!</strong> Busque a un alumno por su matricula y
                          seleccione la acción que desea realizar
                        </div>
                      </div>
                    </div>

                    <form action="{{route('ga.ver')}}" method="post">
                      @csrf
                      <div class="row">
                        <div class="col-xs-12 col-md-12">
                          <label for="Matricula">Matricula</label>
                          <input name="matricula" onload="autocomplete()" type="text" id="autocomplete" autocomplete="off" class="form-control" placeholder="Introduzca una matricula de un alumno existente">
                        </div>
                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-12 text-center">
                          <input type="submit" class="btn btn-lg btn-success" value="Buscar">
                        </div>
                      </div>
                    </form>




                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
