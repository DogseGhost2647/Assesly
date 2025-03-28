<?php

namespace App\Contracts;

interface ExamenServiceInterface {
    public function listarExamenes();
    public function obtenerExamen(int $id);
    public function crearExamen(array $datos);
    public function actualizarExamen(int $id, array $datos);
    public function eliminarExamen(int $id);
}