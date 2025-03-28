<!-- Modal -->
<div class="modal fade" id="modal{{ $pregunta->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Pregunta</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('preguntas.update', $pregunta->id) }}">
          @csrf
          @method('PUT')

          <div class="form-group">
            <label for="texto">Enunciado:</label>
            <input type="text" id="texto" name="texto" value="{{ $pregunta->texto }}" class="form-control">
        </div>
        <div class="form-group">
        <label for="tipo">Tipo de pregunta:</label>
            <select id="tipo" name="tipo" class="form-control">
            <option value="opcion_multiple">Opción Múltiple</option>
            <option value="verdadero_falso">Verdadero/Falso</option>
            <option value="abierta">Respuesta Abierta</option>
            </select>
        </div>

          <button type="submit" class="btn btn-primary mt-3">Actualizar pregunta</button>
        </form>
      </div>
    </div>
  </div>
</div>