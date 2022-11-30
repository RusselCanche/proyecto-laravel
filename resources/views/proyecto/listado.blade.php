@extends('layouts.app-master')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Fecha de entrega</th>
                <th scope="col">Descripción</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proyectos as $p)
            <tr>
                <th scope="row">{{ $loop ->iteration}}</th>
                <td>{{ $p->nombre }}</td>
                <td>{{ $p->fecha_entrega }}</td>
                <td>{{ $p->descripcion}}</td>
                <td>{{ $p->status->status}}</td>
                <td>
                    <a href="/proyecto/{{$p->id}}" class="btn btn-primary btn-sm">Consultar</a>
                    <a href="/proyecto/{{$p->id}}/edit" class="btn btn-warning btn-sm">Modificar</a>
                    <a href="/actividades" class="btn btn-success btn-sm">Detalle</a>
                    <!-- PENDIENTE DETERMINAR SI SE HABILITARÁ LA OPCIÓN
                    Button trigger modal
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-{{$p->id}}">
                        Eliminar
                    </button>

                    <div class="modal fade" id="modal-{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/proyecto/{{$p->id}}" method="post" id="form-eliminar-{{$p->id }}">
                                        @method('DELETE')
                                        @csrf
                                    <label>¿Estás seguro de eliminar al usuario {{$p->nombre}}?</label>
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary" form="form-eliminar-{{$p->id}}">Confirmar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection