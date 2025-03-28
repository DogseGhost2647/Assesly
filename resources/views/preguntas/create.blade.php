@extends('layouts.app')
@section('content')
<div class="card" style="width: 58rem;">
  <div class="card-body">
    <h5 class="card-title">Agregar Pregunta</h5>
    <form method="POST" action="{{ route('preguntas.store') }}">
    @csrf
        <div class="mb-3">
        <label for="texto" class="form-label fw-bold">Enunciado:</label>
        <input type="text" id="texto" name="texto" class="form-control rounded" placeholder="Ingrese la pregunta">
    </div>

    <div class="mb-3">
        <label for="tipo" class="form-label fw-bold">Tipo de pregunta:</label>
        <select id="tipo" name="tipo" class="form-select rounded">
            <option value="opcion_multiple">Opción Múltiple</option>
            <option value="verdadero_falso">Verdadero/Falso</option>
            <option value="abierta">Respuesta Abierta</option>
        </select>
    </div>

    <div class="card p-3 mb-3">
        <label class="fw-bold">Opciones de respuesta:</label>
        <div id="opciones"></div>
        <button type="button" onclick="agregarOpcion()" class="btn btn-outline-primary mt-2">
            <i class="bi bi-plus-circle"></i> Agregar Opción
        </button>
    </div>

    <button type="submit" class="btn btn-success w-100">Guardar Pregunta</button>
</form>

<script>
    let contador = 0;
    function agregarOpcion() {
        contador++;
        let html = `
            <div class="input-group mb-2">
                <input type="text" name="opciones[${contador}][contenido]" class="form-control" placeholder="Opción de respuesta">
                <div class="input-group-text">
                    <input type="checkbox" name="opciones[${contador}][es_correcta]" class="form-check-input"> Correcta
                </div>
            </div>`;
        document.getElementById('opciones').insertAdjacentHTML('beforeend', html);
    }
</script>

<!-- Bootstrap Icons (para el ícono del botón) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
  </div>
</div>
@endsection