<div class="row">
  <div class="col-md-12">
    <form action="{{route('alumno.edit',$alumno->matricula)}}" method="get" role="form">
      <input type="submit" class="btn btn-warning float-left" value="Modificar Información">
    </form>
    <form action="{{route('alumno.destroy',$alumno->id_alumno)}}" method="post" role="form">
      @csrf
      @method('DELETE')
      <input type="submit" onclick="return confirm('¿Está seguro de borrar este registro?')" class="btn btn-danger float-right" value="Eliminar Alumno">
    </form>
  </div>
</div>

<hr>

<div class="row">
  <div class="col-xs-12 col-md-6">
    <div class="col-xs-12 col-md-12">
      <label class="display-4"><div class="font-weight-bold">Matricula:</div> {{$alumno->matricula}}</label>
      <hr>
      <label class="display-4"><div class="font-weight-bold">Nombre:</div> {{$alumno->nombre}}</label>
      <hr>
      <label class="display-4"><div class="font-weight-bold">Apellido Paterno:</div> {{$alumno->apellido_paterno}}</label>
      <hr>
      <label class="display-4"><div class="font-weight-bold">Apellido Materno:</div> {{$alumno->apellido_materno}}</label>
      <hr>
    </div>
  </div>
  <div class="col-xs-12 col-md-6">
    <div class="col-xs-12 col-md-12">
      <label class="display-4"><div class="font-weight-bold">Código QR:</div></label>
      <img class="img-fluid mx-auto d-block" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(500)->generate($alumno->codigo_qr)) !!} ">
    </div>
  </div>
</div>
