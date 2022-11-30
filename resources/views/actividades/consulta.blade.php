@extends('layouts.app-master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Consulta de Actividad</h2>
            </div>
            <div class="card-body">
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
                                <label for="tiempoestimado" class="form-label">Tiempo estimado</label>
                                <input type="text" class="form-control" id="tiempoestimado" name="tiempoestimado" value="{{ $actividad->tiempo_estimado}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="finicio" class="form-label">Fecha inicio</label>
                                <input type="date" class="form-control" id="finicio" name="finicio" value="{{ $actividad->fecha_inicio}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="ffin" class="form-label">Fecha fin</label>
                                <input type="date" class="form-control" id="ffin" name="ffin" value="{{ $actividad->fecha_termino}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="prioridad" class="form-label">Prioridad</label>
                                <input type="text" class="form-control" id="prioridad" name="prioridad" value="{{ $actividad->prioridad->prioridad}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="proyecto" class="form-label">Proyecto</label>
                                <input type="text" class="form-control" id="proyecto" name="proyecto" value="{{ $actividad->proyecto->nombre}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="responsable" class="form-label">Responsable</label>
                                <input type="text" class="form-control" id="responsable" name="responsable" value="{{ $actividad->responsable->nombre}} {{ $actividad->responsable->paterno}}" disabled>
                            </div>
                        </div>
                    </div>
                    <a href="/actividades" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
@endsection