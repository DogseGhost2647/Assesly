<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\PreguntaServiceInterface;
use App\Models\Pregunta;

class PreguntaController extends Controller
{
    protected $preguntaService;

    public function __construct(PreguntaServiceInterface $preguntaService)
    {
        $this->preguntaService = $preguntaService;
    }

    public function index()
    {
        $preguntas = $this->preguntaService->listarPreguntas();
        return view('preguntas.index', compact('preguntas'));
    }

    public function create()
    {
        return view('preguntas.create');
    }

    public function store(Request $request)
{
    $datos = $request->validate([
        'texto' => 'required|string|max:255',
        'tipo' => 'required|in:opcion_multiple,verdadero_falso,abierta',
        'opciones' => 'sometimes|array',
        'opciones.*.contenido' => 'sometimes|required|string|max:255',
        'opciones.*.es_correcta' => 'nullable',
    ]);

    $this->preguntaService->crearPregunta($datos);
    
    return redirect()->route('preguntas.create')->with('success', 'Pregunta creada correctamente');
}


    public function update(Request $request, $id)
    {
        $datos = $request->validate([
            'texto' => 'required|string|max:255',
            'tipo' => 'required|in:opcion_multiple,verdadero_falso,abierta',
        ]);

        $this->preguntaService->actualizarPregunta($id, $datos);

        return redirect()->route('preguntas.index')->with('success', 'Pregunta actualizada correctamente');
    }

    public function destroy($id)
    {
        $this->preguntaService->eliminarPregunta($id);
        return redirect()->route('preguntas.index')->with('success', 'Pregunta eliminada correctamente');
    }
}
