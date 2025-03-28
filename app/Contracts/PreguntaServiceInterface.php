<?php

namespace App\Contracts;

interface PreguntaServiceInterface {
    public function listarPreguntas();
    public function obtenerPregunta(int $id);
    public function crearPregunta(array $datos);
    public function actualizarPregunta(int $id, array $datos);
    public function eliminarPregunta(int $id);
}