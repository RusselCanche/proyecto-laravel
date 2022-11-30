@extends('layouts.app-master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Registro de Personal</h2>
            </div>
            <div class="card-body">
                <form action="/personal" method="post">
                    @csrf
                    @include('layouts.partials.messages')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" value="{{ old('nombre')}}" name="nombre">
                            </div>
                            <div class="mb-3">
                                <label for="paterno" class="form-label">Paterno</label>
                                <input type="text" class="form-control" id="paterno" value="{{ old('paterno')}}" name="paterno">
                            </div>
                            <div class="mb-3">
                                <label for="materno" class="form-label">Materno</label>
                                <input type="text" class="form-control" id="materno" value="{{ old('materno')}}" name="materno">
                            </div>
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="direccion" value="{{ old('direccion')}}" name="direccion">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="text" class="form-control" id="telefono" value="{{ old('telefono')}}" name="telefono">
                            </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo</label>
                                <input type="text" class="form-control" id="correo" value="{{ old('correo')}}" name="correo">
                            </div>
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Usuario</label>
                                <input type="text" class="form-control" id="usuario" value="{{ old('usuario')}}" name="usuario">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" value="{{ old('password')}}" name="password">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection