@extends ('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4 rounded w-50 w-md-75" style="max-width: 400px;">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">Crear Examen</h3>
            
            <form method="POST" action="{{ route('examenes.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nombre" class="fw-bold">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                </div>
                <div class="form-group mt-3">
                    <label for="fecha_limite" class="fw-bold">Fecha Límite</label>
                    <input type="datetime-local" id="fecha_limite" name="fecha_limite" class="form-control" required>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary w-100">Crear</button>
                </div>
            </form>

            @if (session('success'))
                <div class="alert alert-success mt-3 text-center" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
