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


    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Asignar Equipo</div>
                  <div class="card-body">

                    <form method="post" action="{{route('equipo.store')}}">
                      @csrf
                      <input type="hidden" name="id_alumno" value="{{$alumno->id_alumno}}">
                      <div class="row">
                        <div class="col-xs-12 col-md-6">
                          <label for="Matricula">Matricula de Alumno</label>
                          <input type="text" class="form-control" value="{{$alumno->matricula}}" disabled>
                        </div>
                        <div class="col-xs-12 col-md-6">
                          <label for="Matricula">Alumno</label>
                          <input type="text" class="form-control" value="{{$alumno->nombre}} {{$alumno->apellido_paterno}} {{$alumno->apellido_materno}}" disabled>
                        </div>
                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-6">
                          <label for="marca">Marca del equipo</label>
                          <input type="text" name="marca_equipo" class="form-control" required>
                        </div>
                        <div class="col-xs-12 col-md-6">
                          <label for="modelo">Modelo del equipo</label>
                          <input type="text" name="modelo_equipo" class="form-control" required>
                        </div>
                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-6">
                          <label for="color">Color del equipo</label>
                          <input type="text" name="color_equipo" class="form-control" required>
                        </div>
                        <div class="col-xs-12 col-md-6">
                          <label for="tipo">Tipo de equipo</label>
                          <input type="text" name="tipo_equipo" class="form-control" placeholder="Laptop,Tablet,Televisión,Etc." required>
                        </div>
                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-12">
                          <label for="color">Número de serie</label>
                          <input type="text" name="numero_serie" class="form-control" required>
                        </div>
                      </div>


                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-12">
                          <div class="alert alert-warning">
                            <strong>Nota!</strong> El código QR será generado automáticamente
                            cuando se cree el equipo dentro del sistema.
                          </div>
                        </div>
                      </div>


                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-12 text-center">
                          <input type="submit" class="btn btn-lg btn-success" value="Crear y Asignar equipo">
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
