@extends('layouts.app-master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Registro de actividad</h2>
            </div>
            <div class="card-body">
                <form action="/actividades" method="post">
                    @csrf
                    @include('layouts.partials.messages')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" value="{{ old('nombre')}}" name="nombre">
                            </div>
                            <div class="mb-3">
                                <label for="fase" class="form-label">Fase</label>
                                <input type="text" class="form-control" id="fase" value="{{ old('fase')}}" name="fase">
                            </div>
                            <div class="mb-3">
                                <label for="tiempoestimado" class="form-label">Tiempo estimado</label>
                                <input type="text" class="form-control" id="tiempoestimado" value="{{ old('tiempoestimado')}}" name="tiempoestimado">
                            </div>
                            <div class="mb-3">
                                <label for="finicio" class="form-label">Fecha inicio</label>
                                <input type="date" class="form-control" id="finicio" value="{{ old('finicio')}}" name="finicio">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="ffin" class="form-label">Fecha fin</label>
                                <input type="date" class="form-control" id="ffin" value="{{ old('ffin')}}" name="ffin">
                            </div>
                            <div class="mb-3">
                                <label for="">Prioridad</label>
                                <select class="form-select" name="id_prioridad">
                                    <option value="" disabled>Selecione una prioridad</option>
                                        @foreach ($prioridades as $prioridad)
                                            <option value="{{ $prioridad['id'] }}">{{ $prioridad['prioridad'] }}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="mb-3"> 
                                <label for="">Proyecto</label>
                                <select class="form-select" name="id_proyecto">
                                    <option value="" disabled>Selecione una proyecto</option>
                                        @foreach ($proyectos as $proyecto)
                                            <option value="{{ $proyecto['id'] }}">{{ $proyecto['nombre'] }}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="mb-3"> 
                                <label for="">Responsable</label>
                                <select class="form-select" name="id_personal">
                                    <option value="" disabled>Selecione una responsable</option>
                                        @foreach ($personal as $persona)
                                            <option value="{{ $persona['id'] }}">{{ $persona['nombre']}} {{$persona['paterno']}} {{$persona['materno']}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection