<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OpcionRespuesta extends Model
{
    use HasFactory;

    protected $table = 'opciones_respuesta';

    protected $fillable = ['pregunta_id', 'contenido', 'es_correcta'];

    public function pregunta()
    {
        return $this->belongsTo(Pregunta::class);
    }
}
