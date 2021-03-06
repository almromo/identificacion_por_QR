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
                <div class="card-header">Editar Alumno</div>
                  <div class="card-body">

                    <form method="POST" action="{{route('alumno.update',$alumno->id_alumno)}}" role="form">
                      @csrf
                      @method('PUT')
                      <div class="row">
                        <div class="col-xs-12 col-md-12">
                          <label for="Matricula">Matricula</label>
                          <input type="text" class="form-control" value="{{$alumno->matricula}}" placeholder="Introduzca una matricula" name="matricula" required>
                        </div>
                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-4">
                          <label for="Nombre">Nombre</label>
                          <input type="text" class="form-control" value="{{$alumno->nombre}}" placeholder="Introduzca un nombre" name="nombre" required>
                        </div>
                        <div class="col-xs-12 col-md-4">
                          <label for="Apellido Paterno">Apellido Paterno</label>
                          <input type="text" class="form-control" value="{{$alumno->apellido_paterno}}" placeholder="Introduzca un apellido" name="apellido_paterno" required>
                        </div>
                        <div class="col-xs-12 col-md-4">
                          <label for="Apellido Materno">Apellido Materno</label>
                          <input type="text" class="form-control" value="{{$alumno->apellido_materno}}" placeholder="Introduzca un apellido" name="apellido_materno" required>
                        </div>
                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-12">
                          <div class="alert alert-danger">
                            <strong>Peligro!</strong> Cualquier modificación hecha, afectara el código QR del alumno
                          </div>
                        </div>
                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-xs-12 col-md-12 text-center">
                          <input type="submit" class="btn btn-lg btn-warning" value="Modificar Alumno">
                        </div>
                      </div>




                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
