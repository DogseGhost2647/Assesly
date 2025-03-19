@extends ('layouts.app')
@section('content')
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Eliminar examen</h5>
    <form method="POST" action="{{ route('examenes.destroy') }}">
        @csrf
        <div class="form-group">
            <label for="IdExamen">Id del examen</label>
            <input type="text" id="IdExamen" name="IdExamen" class="form-control" required>
        </div>
        <button type="submit" class="form-control">Eliminar</button>
    </form>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-success" role="alert">
            {{ session('error') }}
        </div>
    @endif
  </div>
</div>
@endsection