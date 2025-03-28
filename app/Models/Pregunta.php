<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'preguntas';
    protected $fillable = ['texto','tipo'];
    public $timestamps = false;

    public function examenes(){
        return $this->belongsToMany(Examen::class, 'examenes_preguntas');
    }

    public function opciones(){
        return $this->hasMany(OpcionRespuesta::class);
    }
}
