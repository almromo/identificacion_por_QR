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
                <div class="card-header">Asignar Vehiculo</div>
                  <div class="card-body">

                    <form method="post" action="{{route('vehiculo.store')}}">
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
                          <label for="marca">Marca Vehiculo</label>
                          <input type="text" name="marca_vehiculo" class="form-control" placeholder="Honda,Ford,Nissan,Etc" required>
                        </div>
                        <div class="col-xs-12 col-md-6">
                          <label for="modelo">Modelo del vehiculo</label>
                          <input type="text" name="modelo_vehiculo" class="form-control" placeholder="Civic,Focus,Sentra,Etc" required>
                        </div>
                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-6">
                          <label for="color">Color del vehiculo</label>
                          <input type="text" name="color_vehiculo" class="form-control" required>
                        </div>
                        <div class="col-xs-12 col-md-6">
                          <label for="tipo">Tipo de vehiculo</label>
                          <input type="text" name="tipo_vehiculo" class="form-control" placeholder="Automóvil,Motocicleta,Otro" required>
                        </div>
                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-12">
                          <label for="color">Número de placas</label>
                          <input type="text" name="placa_vehiculo" class="form-control" required>
                        </div>
                      </div>


                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-12">
                          <div class="alert alert-warning">
                            <strong>Nota!</strong> El código QR será generado automáticamente
                            cuando se cree el vehiculo dentro del sistema.
                          </div>
                        </div>
                      </div>


                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-12 text-center">
                          <input type="submit" class="btn btn-lg btn-success" value="Crear y Asignar vehiculo">
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
