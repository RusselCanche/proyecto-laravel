@extends('layouts.app-master')
@section('content')
    <div class="row">
        <div class="col-md-2">
            <h3>Proyectos</h3>
            <ul class="list-group">
                <li class="list-group-item"><a href="/actividades">Todas las actividades</a></li>
                @foreach($proyectos as $p)
                    <li class="list-group-item"><a href="/proyecto/{{$p->id}}/actividades">{{$p->nombre}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-10">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tiempo estimado</th>
                        <th scope="col">Fecha inicio</th>
                        <th scope="col">Fecha fin</th>
                        <th scope="col">Prioridad</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Responsable</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
            @foreach($actividades as $a)
            <tr>
                <th scope="row">{{ $loop ->iteration}}</th>
                <td>{{ $a->nombre }}</td>
                <td>{{ $a->tiempo_estimado }}</td>
                <td>{{ $a->fecha_inicio}}</td>
                <td>{{ $a->fecha_termino}}</td>
                <td>{{ $a->prioridad->prioridad}}</td>
                <td>{{ $a->status->status}}</td>
                <td>{{ $a->responsable->nombre}}</td>
                <td>
                    <a href="/actividades/{{$a->id}}" class="btn btn-primary btn-sm">Consultar</a>
                    <a href="/actividades/{{$a->id}}/edit" class="btn btn-warning btn-sm">Modificar</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-{{$a->id}}">
                        Eliminar
                    </button>

                    <div class="modal fade" id="modal-{{$a->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/actividades/{{$a->id}}" method="post" id="form-eliminar-{{$a->id }}">
                                        @method('DELETE')
                                        @csrf
                                    <label>¿Estás seguro de eliminar la actividad {{$a->nombre}}?</label>
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary" form="form-eliminar-{{$p->id}}">Confirmar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>

@endsection