@extends('layouts.app-master')
@section('content')
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Rol</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($roles as $r)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$r->rol}}</td>
                <td>
                    <a href="/rol/{{$r->id}}" class="btn btn-primary btn-sm">Consultar</a>
                    <a href="/rol/{{$r->id}}/edit" class="btn btn-warning btn-sm">Modificar</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-{{$r->id}}">
                    Eliminar
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-{{$r->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/rol/{{$r->id}}" method="post" id="form-eliminar-{{$r->id}}">
                                @method('DELETE')
                                @csrf
                                ¿Estás seguro de eliminar el rol {{$r->rol}}? 
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-danger" form="form-eliminar-{{$r->id}}">Eliminar</button>
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