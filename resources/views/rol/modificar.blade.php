@extends('layouts.app-master')
@section('content')
    <div class="container-fluid">
        <div class="card">
        <div class="card-header">
            Modificar Rol
        </div>
        <div class="card-body">
            <form action="/rol/{{$rol->id}}" method="post">
            @method('PUT')
            @csrf
            @include('layouts.partials.messages')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="rol" class="form-label">Rol</label>
                        <input type='text' name='rol' id='rol' class="form-control" value="{{$rol->rol}}">
                    </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            </form>
            <a href="/rol" class="btn btn-primary btn-sm">Regresar</a>
        </div>
        </div>
    </div>
@endsection