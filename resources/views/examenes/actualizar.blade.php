<!-- Modal -->
<div class="modal fade" id="modal {{ $examen->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ route('examenes.update', '$examen') }}">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" value="{{ $examen->nombre }}" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fecha_limite">Fecha Limite</label>
            <input type="datetime-local" id="fecha_limite" value="{{ $examen->fecha_limite }}" name="fecha_limite" class="form-control" required>
        </div>
        <button type="submit" class="form-control">Crear</button>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

