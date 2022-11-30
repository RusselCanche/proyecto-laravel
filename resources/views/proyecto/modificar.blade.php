@extends('layouts.app-master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Modificar Proyecto</h2>
            </div>
            <div class="card-body">
                <form action="/proyecto/{{$proyecto->id}}" method="post">
                    @method('PUT')
                    @csrf
                    @include('layouts.partials.messages')
                    <div class="row">
                    <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $proyecto->nombre}}">
                            </div>
                            <div class="mb-3">
                                <label for="fechaentrega" class="form-label">Fecha de entrega</label>
                                <input type="date" class="form-control" id="fechaentrega" name="fechaentrega" value="{{ $proyecto->fecha_entrega}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $proyecto->descripcion}}">
                            </div>
                            <div class="mb-3">
                                <label for="">Seleccione un estado</label>
                                <select class="form-select" name="id_status">
                                    <option value="" disabled>Selecione un estado</option>
                                        @foreach ($estados as $status)
                                            <option value="{{$status['id']}}" 
                                            @if ($proyecto->status->id === $status['id'])
                                                selected
                                            @endif
                                            >{{ $status['status'] }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection