@extends('layouts.app-master')
@section('content')
    <div class="container-fluid">
        <div class="card">
        <div class="card-header">
            Consulta Rol
        </div>
        <div class="card-body">
            <form action="/rol" method="post">
            @csrf
            <div class="mb-3">
                <label for="rol" class="form-label">Rol</label>
                <input type='text' name='rol' id='rol' class="form-control" value="{{$rol->rol}}" disabled>
            </div>
            </form>
            <a href="/rol" class="btn btn-primary btn-sm">Regresar</a>
        </div>
        </div>
    </div>
@endsection