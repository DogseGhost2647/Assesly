

<!-- Modal -->
<div class="modal fade" id="modal{{ $examen->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Examen</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('examenes.update', $examen->id) }}">
          @csrf
          @method('PUT')

          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $examen->nombre }}" class="form-control" required>
          </div>
          
          <div class="form-group">
            <label for="fecha_limite">Fecha límite:</label>
            <input type="datetime-local" id="fecha_limite" name="fecha_limite" value="{{ $examen->fecha_limite }}" class="form-control" required>
          </div>

          <button type="submit" class="btn btn-primary mt-3">Actualizar examen</button>
        </form>
      </div>
    </div>
  </div>
</div>

