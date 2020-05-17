
<p>Estás viendo los vehiculos que {{$alumno->nombre}} tiene registrado a su nombre

<hr>

<div class="row">
  <div class="col-xs-12 col-md-12">

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>N° Placas</th>
          <th>Tipo de Vehiculo</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Color</th>
          <th>Código QR</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($alumno->vehiculos as $vehiculo)
        <tr>
          <td>{{$vehiculo->placa_vehiculo}}</td>
          <td>{{$vehiculo->tipo_vehiculo}}</td>
          <td>{{$vehiculo->marca_vehiculo}}</td>
          <td>{{$vehiculo->modelo_vehiculo}}</td>
          <td>{{$vehiculo->color_vehiculo}}</td>
          <th>
            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#qr_v{{$vehiculo->id_vehiculo}}">
              Ver
            </button>
          </th>
          <th>
            <form action="{{route('vehiculo.edit',$vehiculo->id_vehiculo)}}" method="get" role="form">
              <input type="submit" class="btn btn-warning btn-sm" value="Modificar"/>
            </form>
            <form action="{{route('vehiculo.destroy',$vehiculo->id_vehiculo)}}" method="post" role="form">
              @csrf
              @method('DELETE')
              <input type="submit" onclick="return confirm('¿Está seguro de borrar este registro?')" class="btn btn-danger" value="Eliminar">
            </form>
        </tr>

        <!-- The Modal -->
        <div class="modal fade" id="qr_v{{$vehiculo->id_vehiculo}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Imagen QR</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <p> Estás viendo el código QR del vehiculo con placas {{$vehiculo->placa_vehiculo}}. </p>
                <hr>
                <img class="img-fluid" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(500)->generate($vehiculo->codigo_qr)) !!} ">
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
