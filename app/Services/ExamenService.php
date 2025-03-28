<?php

namespace App\Services;

use App\Contracts\ExamenServiceInterface;
use App\Models\Examen;

class ExamenService implements ExamenServiceInterface{
    public function listarExamenes(){
        return Examen::all();
    }

    public function obtenerExamen(int $id)
    {
        return Examen::findOrFail($id);
    }

    public function crearExamen(array $datos)
    {
        return Examen::create($datos);
    }

    public function actualizarExamen(int $id, array $datos)
    {
        $examen = Examen::findOrFail($id);
        $examen->update($datos);
        return $examen;
    }

    public function eliminarExamen(int $id)
    {
        $examen = Examen::findOrFail($id);
        return $examen->delete();
    }


}