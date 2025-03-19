<?php

use App\Http\Controllers\ExamenController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/examenes/crear', [ExamenController::class, 'crear'])->name('examenes.crear');

Route::post('/examen/store', [ExamenController::class, 'crear'])->name('examenes.store');

Route::get('/examenes/leer', [ExamenController::class, 'leer'])->name('examenes.leer');

Route::get('/examenes/eliminar', [ExamenController::class, 'eliminar'])->name('examenes.eliminar');
Route::post('/examenes/destroy', [ExamenController::class, 'destroy'])->name('examenes.destroy');

Route::put('/examenes/{examenes}', [ExamenController::class, 'update'])->name('examenes.update');
