@extends('layouts.app-master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Consulta de Proyecto</h2>
            </div>
            <div class="card-body">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $proyecto->nombre}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="fechaentrega" class="form-label">Fecha de entrega</label>
                                <input type="date" class="form-control" id="fechaentrega" name="fechaentrega" value="{{ $proyecto->fecha_entrega}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $proyecto->descripcion}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <input type="text" class="form-control" id="status" name="status" value="{{ $proyecto->status->status}}" disabled>
                            </div>
                        </div>
                    </div>
                    <a href="/proyecto" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
@endsection