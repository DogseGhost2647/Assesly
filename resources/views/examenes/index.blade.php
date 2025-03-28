@extends('layouts.app')
@section('content')
<h1 class="text-center p-3">Examenes</h1>
    <div class="p-5 table-responsive">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Examen</th>
      <th scope="col">Fecha Limite</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach ($examenes as $examen)
    <td>{{ $examen ->id }}</td>
    <td>{{ $examen ->nombre }}</td>
    <td>{{ $examen ->fecha_limite }}</td>
    <td>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal{{ $examen->id }}">
  Editar
</button>

      @include('examenes.update')
      <form action="{{ route('examenes.destroy', $examen) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este examen?')">
            Eliminar
        </button>
    </form>
    </td>
    </tr>
    @endforeach
  </tbody>
  </table>
    </div>
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
@endsection



