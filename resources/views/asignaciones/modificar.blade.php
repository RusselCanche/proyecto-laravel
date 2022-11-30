@extends('layouts.app-master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Modificar Status de Actividad</h2>
            </div>
            <div class="card-body">
                <form action="/asignaciones/{{$actividad->id}}" method="post">
                    @method('PUT')
                    @csrf
                    @include('layouts.partials.messages')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Seleccione un estado</label>
                                <select class="form-select" name="id_status">
                                    <option value="" disabled>Selecione un estado</option>
                                        @foreach ($estados as $status)
                                            <option value="{{$status['id']}}" 
                                            @if ($actividad->status->id === $status['id'])
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