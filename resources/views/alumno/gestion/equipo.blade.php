
<p>Estás viendo los equipos que {{$alumno->nombre}} tiene registrado a su nombre</p>
<hr>

<div class="row">
  <div class="col-xs-12 col-md-12">

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>N° Serie</th>
          <th>Tipo</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Color</th>
          <th>Código QR</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($alumno->equipos as $equipo)
        <tr>
          <td>{{$equipo->numero_serie}}</td>
          <td>{{$equipo->tipo_equipo}}</td>
          <td>{{$equipo->marca_equipo}}</td>
          <td>{{$equipo->modelo_equipo}}</td>
          <td>{{$equipo->color_equipo}}</td>
          <th><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#qr_e{{$equipo->id_equipo}}">
              Ver
              </button>
          </th>
          <th>
            <form action="{{route('equipo.edit',$equipo->id_equipo)}}" method="get" role="form">
              <input type="submit" class="btn btn-warning btn-sm" value="Modificar">
            </form>

            <form action="{{route('equipo.destroy',$equipo->id_equipo)}}" method="post" role="form">
              @csrf
              @method('DELETE')
              <input type="submit" onclick="return confirm('¿Está seguro de borrar este registro?')" class="btn btn-danger" value="Eliminar">
            </form>
        </tr>


        <div class="modal fade" id="qr_e{{$equipo->id_equipo}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Imagen QR</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <p> Estás viendo el código QR del equipo con n° serie {{$equipo->numero_serie}}. </p>
                <hr>
                <img class="img-fluid mx-auto d-block" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(400)->generate($equipo->codigo_qr)) !!} ">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
              </div>

            </div>
          </div>
        </div>
        @endforeach
      </tbody>
    </table>

    <hr>

  </div>
</div>
