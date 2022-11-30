@extends('layouts.auth-master')
@section('content')
    <br>
    <div class="shadow p-3 mb-5 bg-white rounded">
        <h2>Iniciar Sesion</h2>
        <br>
        <form action="/login" method="post">
            @csrf
            @include('layouts.partials.messages')
            <div class="form-floating mb-3">
                <input type="text" placeholder="Usuario" class="form-control" name="usuario" id="exampleInputEmail1" aria-describedby="emailHelp">
                <label for="exampleInputEmail1" class="form-label">Usuario</label>
                <div id="emailHelp" class="form-text">Nunca compartiremos sus datos con nadie más.</div>
            </div>
            <div class="form-floating mb-3">
                <input type="password" placeholder="Contraseña" class="form-control" name="password" id="exampleInputPassword1">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            </div>
            <div class="mb-3">
                <a href="/registrar">Registrarme</a>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
        </form>
    </div>
@endsection