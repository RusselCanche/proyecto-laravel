@extends('layouts.app-master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Modificar Actividad</h2>
            </div>
            <div class="card-body">
                <form action="/actividades/{{$actividad->id}}" method="post">
                    @method('PUT')
                    @csrf
                    @include('layouts.partials.messages')
                    <div class="row">
                    <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $actividad->nombre}}">
                            </div>
                            <div class="mb-3">
                                <label for="fase" class="form-label">Fase</label>
                                <input type="text" class="form-control" id="fase" name="fase" value="{{ $actividad->fase}}">
                            </div>
                            <div class="mb-3">
                                <label for="tiempoestimado" class="form-label">Tiempo estimado</label>
                                <input type="text" class="form-control" id="tiempoestimado" name="tiempoestimado" value="{{ $actividad->tiempo_estimado}}">
                            </div>
                            <div class="mb-3">
                                <label for="finicio" class="form-label">Fecha inicio</label>
                                <input type="date" class="form-control" id="finicio" name="finicio" value="{{ $actividad->fecha_inicio}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="mb-3">
                                <label for="ffin" class="form-label">Fecha fin</label>
                                <input type="date" class="form-control" id="ffin" name="ffin" value="{{ $actividad->fecha_termino}}">
                            </div>
                        <div class="mb-3">
                                <label for="">Prioridad</label>
                                <select class="form-select" name="id_prioridad">
                                    <option value="" disabled>Selecione una prioridad</option>
                                        @foreach ($prioridades as $prioridad)
                                            <option value="{{ $prioridad['id'] }}"
                                            @if($actividad->prioridad->id===$prioridad['id'])
                                                selected
                                                @endif
                                            >{{ $prioridad['prioridad'] }}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="mb-3"> 
                                <label for="">Estado</label>
                                <select class="form-select" name="id_status">
                                    <option value="" disabled>Selecione una status</option>
                                        @foreach ($estados as $status)
                                            <option value="{{ $status['id'] }}"
                                            @if($actividad->status->id===$status['id'])
                                                selected
                                                @endif
                                            >{{ $status['status'] }}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="mb-3"> 
                                <label for="">Responsable</label>
                                <select class="form-select" name="id_personal">
                                    <option value="" disabled>Selecione una responsable</option>
                                        @foreach ($personal as $persona)
                                            <option value="{{ $persona['id'] }}"
                                                @if($actividad->responsable->id===$persona['id'])
                                                selected
                                                @endif
                                            >{{ $persona['nombre']}} {{$persona['paterno']}} {{$persona['materno']}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection