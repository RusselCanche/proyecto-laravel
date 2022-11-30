@extends('layouts.app-master')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Usuario</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personal as $p)
            <tr>
                <th scope="row">{{ $loop ->iteration}}</th>
                <td>{{ $p->nombre}} {{ $p->paterno}} {{ $p->materno}}</td>
                <td>{{ $p->telefono }}</td>
                <td>{{ $p->correo}}</td>
                <td>{{ $p->usuario}}</td>
                <td>
                    <a href="/personal/{{$p->id}}" class="btn btn-primary btn-sm">Consultar</a>
                    <a href="/personal/{{$p->id}}/edit" class="btn btn-warning btn-sm">Modificar</a>
                    <a href="/personal/auxiliar/{{$p->id}}/edit" class="btn btn-warning btn-sm">Cambiar contraseña</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-{{$p->id}}">
                        Eliminar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modal-{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/personal/{{$p->id}}" method="post" id="form-eliminar-{{$p->id }}">
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
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection