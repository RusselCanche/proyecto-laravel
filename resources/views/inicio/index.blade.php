@extends('layouts.app-master')
@section('content')
    <h2>Inicio</h2>
    @auth
        <p>¡Bienvenido, {{ auth()->user()->usuario }}!</p>
        @if (auth()->user()->id_rol === 1)
            <h2>ADMIN</h2>
        @endif
        @if (auth()->user()->id_rol === 2)
            @if (auth()->user()->estado === 1)
            <h2>ACTIVIDADES</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre de tarea</th>
                        <th scope="col">Tiempo estimado</th>
                        <th scope="col">Fecha inicio</th>
                        <th scope="col">Fecha termino</th>
                        <th scope="col">Prioridad</th>
                        <th scope="col">Estatus</th>
                        <th scope="col">Proyecto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($actividades as $p)
                    <tr>
                        <th scope="row">{{ $loop ->iteration}}</th>
                        <td>{{ $p->nombre}}</td>
                        <td>{{ $p->tiempo_estimado}}</td>
                        <td>{{ $p->fecha_inicio}}</td>
                        <td>{{ $p->fecha_termino}}</td>
                        <td>{{ $p->prioridad->prioridad}}</td>
                        <td>{{ $p->status->status}}</td>
                        <td>{{ $p->proyecto->nombre}}</td>
                        <td>
                        <a href="/asignaciones/{{$p->id}}" class="btn btn-primary btn-sm">Consultar</a>
                        <a href="/asignaciones/{{$p->id}}/edit" class="btn btn-warning btn-sm">Modificar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        @endif
    @endauth
    @guest
        <p>Debes <a href="login">iniciar sesion</a></p>
    @endguest
@endsection