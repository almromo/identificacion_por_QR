
<p>Estás viendo los equipos que {{$alumno->nombre}} tiene registrado a su nombre
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
          <th><a href="#" class="btn btn-warning btn-sm">Modificar</a>  <a href="#" class="btn btn-danger btn-sm">Eliminar</a></th>
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
                <img class="img-fluid" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(500)->generate($equipo->codigo_qr)) !!} ">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>
        @endforeach
      </tbody>
    </table>

  </div>
</div>
