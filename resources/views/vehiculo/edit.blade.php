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
                <div class="card-header">Editar Vehiculo</div>
                  <div class="card-body">

                    <form method="post" action="{{route('vehiculo.update',$vehiculo->id_vehiculo)}}" role="form">
                      @csrf
                      @method('PUT')
                      <div class="row">
                        <div class="col-xs-12 col-md-6">
                          <label for="Matricula">Matricula de Alumno</label>
                          <input type="text" class="form-control" value="{{$vehiculo->alumnos->matricula}}" disabled>
                        </div>
                        <div class="col-xs-12 col-md-6">
                          <label for="Matricula">Alumno</label>
                          <input type="text" class="form-control" value="{{$vehiculo->alumnos->nombre}} {{$vehiculo->alumnos->apellido_paterno}} {{$vehiculo->alumnos->apellido_materno}}" disabled>
                        </div>
                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-6">
                          <label for="marca">Marca del vehiculo</label>
                          <input type="text" name="marca_vehiculo" class="form-control" value="{{$vehiculo->marca_vehiculo}}" required>
                        </div>
                        <div class="col-xs-12 col-md-6">
                          <label for="modelo">Modelo del vehiculo</label>
                          <input type="text" name="modelo_vehiculo" class="form-control" value="{{$vehiculo->modelo_vehiculo}}" required>
                        </div>
                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-6">
                          <label for="color">Color del vehiculo</label>
                          <input type="text" name="color_vehiculo" class="form-control" value="{{$vehiculo->color_vehiculo}}" required>
                        </div>
                        <div class="col-xs-12 col-md-6">
                          <label for="tipo">Tipo de vehiculo</label>
                          <input type="text" name="tipo_vehiculo" class="form-control" value="{{$vehiculo->tipo_vehiculo}}" placeholder="Motocicleta,Automóvil,Otro." required>
                        </div>
                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-12">
                          <label for="color">N° Placas / Patente / Matricula del vehiculo</label>
                          <input type="text" name="placa_vehiculo" class="form-control" value="{{$vehiculo->placa_vehiculo}}" required>
                        </div>
                      </div>


                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-12">
                          <div class="alert alert-warning">
                            <strong>Nota!</strong> Modificar uno de estos datos, afectara el código QR del vehiculo.
                          </div>
                        </div>
                      </div>


                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-12 text-center">
                          <input type="submit" class="btn btn-lg btn-warning" value="Modificar">
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
