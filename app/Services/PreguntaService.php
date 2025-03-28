<?php

namespace App\Services;

use App\Contracts\PreguntaServiceInterface;
use App\Models\Pregunta;

class PreguntaService implements PreguntaServiceInterface{
    public function listarPreguntas(){
        return Pregunta::all();
    }

    public function obtenerPregunta(int $id)
    {
        return Pregunta::findOrFail($id);
    }

    public function crearPregunta(array $datos)
{
    $pregunta = Pregunta::create([
        'texto' => $datos['texto'],
        'tipo' => $datos['tipo'],
    ]);

    if (!empty($datos['opciones']) && $datos['tipo'] === 'opcion_multiple') {
        foreach ($datos['opciones'] as $opcion) {
            $pregunta->opciones()->create([
                'contenido' => $opcion['contenido'],
                'es_correcta' => isset($opcion['es_correcta']) && $opcion['es_correcta'] === "on" ? 1 : 0,
            ]);
        }
    }

    return $pregunta;
}

    public function actualizarPregunta(int $id, array $datos)
    {
        $examen = Pregunta::findOrFail($id);
        $examen->update($datos);
        return $examen;
    }

    public function eliminarPregunta(int $id)
    {
        $examen = Pregunta::findOrFail($id);
        return $examen->delete();
    }


}