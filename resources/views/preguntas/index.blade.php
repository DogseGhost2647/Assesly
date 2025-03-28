@extends('layouts.app')
@section('content')
<h1 class="text-center p-3">Preguntas</h1>
    <div class="p-5 table-responsive">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Enunciado</th>
      <th scope="col">Tipo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach ($preguntas as $pregunta)
    <td>{{ $pregunta ->id }}</td>
    <td>{{ $pregunta ->texto }}</td>
    <td>{{ $pregunta ->tipo }}</td>
    <td>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal{{ $pregunta->id }}">
  Editar
</button>

      @include('preguntas.update')
      <form action="{{ route('preguntas.destroy', $pregunta) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminar esta pregunta?')">
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



