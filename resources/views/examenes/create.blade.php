@extends('layouts.app')
@section('content')
<div class="card" style="width: 58rem;">
  <div class="card-body">
    <h5 class="card-title">Crear Examen</h5>
    <form method="POST" action="{{ route('examenes.store') }}">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha limite:</label>
            <input type="datetime-local" id="fecha_limite" name="fecha_limite" class="form-control">
        </div>
        <button type="submit" class="form-control">Guardar Examen</button>
    </form>
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
  </div>
</div>
@endsection