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
                <div class="card-header">Editar Equipo</div>
                  <div class="card-body">

                    <form method="post" action="{{route('equipo.update',$equipo->id_equipo)}}">
                      @csrf
                      @method('PUT')
                      <div class="row">
                        <div class="col-xs-12 col-md-6">
                          <label for="Matricula">Matricula de Alumno</label>
                          <input type="text" class="form-control" value="{{$equipo->alumnos->matricula}}" disabled>
                        </div>
                        <div class="col-xs-12 col-md-6">
                          <label for="Matricula">Alumno</label>
                          <input type="text" class="form-control" value="{{$equipo->alumnos->nombre}} {{$equipo->alumnos->apellido_paterno}} {{$equipo->alumnos->apellido_materno}}" disabled>
                        </div>
                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-6">
                          <label for="marca">Marca del equipo</label>
                          <input type="text" name="marca_equipo" class="form-control" value="{{$equipo->marca_equipo}}" required>
                        </div>
                        <div class="col-xs-12 col-md-6">
                          <label for="modelo">Modelo del equipo</label>
                          <input type="text" name="modelo_equipo" class="form-control" value="{{$equipo->modelo_equipo}}" required>
                        </div>
                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-6">
                          <label for="color">Color del equipo</label>
                          <input type="text" name="color_equipo" class="form-control" value="{{$equipo->color_equipo}}" required>
                        </div>
                        <div class="col-xs-12 col-md-6">
                          <label for="tipo">Tipo de equipo</label>
                          <input type="text" name="tipo_equipo" class="form-control" value="{{$equipo->tipo_equipo}}" placeholder="Laptop,Tablet,Televisión,Etc." required>
                        </div>
                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-12">
                          <label for="color">Número de serie</label>
                          <input type="text" name="numero_serie" class="form-control" value="{{$equipo->numero_serie}}" required>
                        </div>
                      </div>


                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-12">
                          <div class="alert alert-warning">
                            <strong>Nota!</strong> Modificar uno de estos datos, afectara el código QR del equipo.
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
