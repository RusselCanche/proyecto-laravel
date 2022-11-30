@extends('layouts.app-master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Consulta de personal</h2>
            </div>
            <div class="card-body">
                <!-- <form action="/usuario" method="post"> -->
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $personal->nombre}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="paterno" class="form-label">Paterno</label>
                            <input type="text" class="form-control" id="paterno" name="paterno" value="{{ $personal->paterno}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="materno" class="form-label">Materno</label>
                            <input type="text" class="form-control" id="materno" name="materno" value="{{ $personal->materno}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $personal->direccion}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="mb-3">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $personal->telefono}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo</label>
                            <input type="text" class="form-control" id="correo" name="correo" value="{{ $personal->correo}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" value="{{ $personal->usuario}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" value="{{ $personal->password}}" disabled>
                        </div>
                    </div>
                </div>
                <a href="/personal" class="btn btn-primary">Regresar</a>

                <!-- <button type="submit" class="btn btn-primary">Acceder</button> -->
                <!-- </form> -->
            </div>
        </div>
    </div>
@endsection