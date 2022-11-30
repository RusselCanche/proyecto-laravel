@extends('layouts.app-master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Consulta de Actividad</h2>
            </div>
            <div class="card-body">
                <!-- <form action="/usuario" method="post"> -->
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $actividad->nombre}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="fase" class="form-label">Fase</label>
                            <input type="text" class="form-control" id="fase" name="fase" value="{{ $actividad->fase}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="tiempo_estimado" class="form-label">Tiempo Estimado</label>
                            <input type="text" class="form-control" id="tiempo_estimado" name="tiempo_estimado" value="{{ $actividad->tiempo_estimado}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="prioridad" class="form-label">Prioridad</label>
                            <input type="text" class="form-control" id="prioridad" name="prioridad" value="{{ $actividad->prioridad->prioridad}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
                            <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="{{ $actividad->fecha_inicio}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_termino" class="form-label">Fecha Termino</label>
                            <input type="date" class="form-control" id="fecha_termino" name="fecha_termino" value="{{ $actividad->fecha_termino}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="proyecto" class="form-label">Proyecto</label>
                            <input type="text" class="form-control" id="proyecto" name="proyecto" value="{{ $actividad->proyecto->nombre}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Estatus</label>
                            <input type="text" class="form-control" id="status" name="status" value="{{ $actividad->status->status}}" disabled>
                        </div>
                    </div>
                </div>
                <a href="/inicio" class="btn btn-primary">Regresar</a>

            </div>
        </div>
    </div>
@endsection