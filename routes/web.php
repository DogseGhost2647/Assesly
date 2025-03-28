<?php

use App\Http\Controllers\ExamenController;
use App\Http\Controllers\PreguntaController;
use App\Models\Pregunta;
use Illuminate\Support\Facades\Route;


//Examenes
Route::get('/', [ExamenController::class, 'create'])->name('examenes.create'); // ruta para la vista de crear examenes
Route::post('/examenes/store', [ExamenController::class, 'store'])->name('examenes.store'); //ruta para guardar examenes
Route::get('/examenes/index', [ExamenController::class, 'index'])->name('examenes.index'); // ruta para ver examenes
Route::put('/examenes/{examen}', [ExamenController::class, 'update'])->name('examenes.update'); // ruta para actualizar 
Route::delete('/examenes/{examen}', [ExamenController::class, 'destroy'])->name('examenes.destroy'); // paaa eliminar

//Preguntas
Route::get('/preguntas/create', [PreguntaController::class, 'create'])->name('preguntas.create'); // ruta para la vista de crear preguntas
Route::post('/preguntas/store', [PreguntaController::class, 'store'])->name('preguntas.store');
Route::get('/preguntas/index', [PreguntaController::class, 'index'])->name('preguntas.index'); // ruta para ver banco de preguntas
Route::put('/preguntas/{pregunta}', [PreguntaController::class, 'update'])->name('preguntas.update'); // ruta para actualizar 
Route::delete('/preguntas/{pregunta}', [PreguntaController::class, 'destroy'])->name('preguntas.destroy'); // paaa eliminar


