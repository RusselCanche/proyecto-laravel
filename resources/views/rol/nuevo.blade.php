@extends('layouts.app-master')
@section('content')
        <div class="container-fluid">
        <div class="card">
        <div class="card-header">
            Registro Rol
        </div>
        <div class="card-body">
            <form action="/rol" method="post">
                @csrf
                @include('layouts.partials.messages')
            <div class="mb-3">
                <label for="rol" class="form-label">Rol</label>
                <input type='text' name='rol' id='rol' value="{{old('rol')}}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
        </div>
    </div>
@endsection