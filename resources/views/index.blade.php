@extends('layouts.app')
@section('title','Menú')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menús</div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <a href="/acceso" class="btn btn-success" rol="button">Registrar Accesos</a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <a href="/admin" class="btn btn-warning" role="button">Administrar Sistema</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
