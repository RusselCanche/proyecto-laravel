@extends('layouts.app-master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Registro de Proyecto</h2>
            </div>
            <div class="card-body">
                <form action="/proyecto" method="post">
                    @csrf
                    @include('layouts.partials.messages')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" value="{{ old('nombre')}}" name="nombre">
                            </div>
                            <div class="mb-3">
                                <label for="fechaentrega" class="form-label">Fecha de entrega</label>
                                <input type="date" class="form-control" id="fechaentrega" value="{{ old('fechaentrega')}}" name="fechaentrega">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <input type="text" class="form-control" id="descripcion" value="{{ old('descripcion')}}" name="descripcion">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection