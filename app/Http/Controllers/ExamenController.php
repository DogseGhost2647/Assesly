<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\ExamenServiceInterface;
use Illuminate\Support\Facades\Hash;

class ExamenController extends Controller
{
    protected $examenService;

    public function __construct(ExamenServiceInterface $examenService)
    {
        $this->examenService = $examenService;

        $this->middleware('auth:usuarios');
    }

    public function index()
    {
        $examenes = $this->examenService->listarExamenes();
        return view('examenes.index', compact('examenes'));
    }

    public function create()
    {
        return view('examenes.create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_limite' => 'required|date_format:Y-m-d\TH:i',
        ]);

        $this->examenService->crearExamen($datos);

        return redirect()->route('examenes.create')->with('success', 'Examen creado correctamente.');
    }

    public function update(Request $request, $id)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_limite' => 'required|date',
        ]);

        $this->examenService->actualizarExamen($id, $datos);

        return redirect()->route('examenes.index')->with('success', 'Examen actualizado correctamente');
    }

    public function destroy($id)
    {
        $this->examenService->eliminarExamen($id);
        return redirect()->route('examenes.index')->with('success', 'Examen eliminado correctamente.');
    }
}
