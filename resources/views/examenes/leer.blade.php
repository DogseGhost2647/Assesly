@extends ('layouts.app')
@section('content')
<h1>Lista de examenes</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha limite</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach ($examen as $examen)

        <td>{{ $examen->nombre }}</td>
        <td>{{ $examen->fecha_limite }}</td>
        <td>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal{{ $examen->id }}">Actualizar</button>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal{{ $examen->id }}">Eliminar</button>

            @include('examenes.actualizar')
        </td>
        </tr>

        @endforeach
  </tbody>
</table>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

@endsection