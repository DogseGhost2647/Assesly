<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $table = 'examenes';
    protected $fillable = ['nombre','fecha_limite'];
    public $timestamps = false;

    public function preguntas(){
        return $this->belongsToMany(Pregunta::class, 'examenes_preguntas');
    }
}
