@extends('layouts.auth-master')
@section('content')
    <br>
    <div class="shadow p-3 mb-5 bg-white rounded">
        <h2>Registrar cuenta</h2>
        <br>
        <form action="/registrar" method="post">
            @csrf
            @include('layouts.partials.messages')
            <div class="form-floating mb-3">
                <input type="text" placeholder="Nombre" class="form-control" name="nombre" id="nombre">
                <label for="nombre" class="form-label">Nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" placeholder="Apellido Paterno" class="form-control" name="paterno" id="paterno">
                <label for="paterno" class="form-label">Apellido Paterno</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" placeholder="Apellido Materno" class="form-control" name="materno" id="materno">
                <label for="materno" class="form-label">Apellido Materno</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" placeholder="Direccion" class="form-control" name="direccion" id="direccion">
                <label for="direccion" class="form-label">Direccion</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" placeholder="Telefono" class="form-control" name="telefono" id="telefono">
                <label for="telefono" class="form-label">Telefono</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" placeholder="Correo Electronico" class="form-control" name="correo" id="correo">
                <label for="correo" class="form-label">Correo Electronico</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" placeholder="Usuario" class="form-control" name="usuario" id="usuario">
                <label for="usuario" class="form-label">Usuario</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" placeholder="Contraseña" class="form-control" name="password" id="password">
                <label for="password" class="form-label">Contraseña</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" placeholder="Contraseña" class="form-control" name="password_confirmation" id="password_confirmation">
                <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
            </div>
            <div class="mb-3">
                <a href="/login">Iniciar Sesion</a>
            </div>
            <button type="submit" class="btn btn-primary">Registrarme</button>
        </form>
    </div>
@endsection