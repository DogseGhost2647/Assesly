<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Examen;

class ExamenController extends Controller
{
    public function crear(){
        return view('examenes.crear');
    }

    public function leer(){
        $examen = Examen::all();
        return view('examenes.leer', compact('examen'));
    }

    public function eliminar(){
        $examen = Examen::all();
        return view('examenes.eliminar', compact('examen'));
    }

    public function update(Request $request, Examen $examen){
        $request->validate([
            'nombre'=>'required|string|max:255',
            'fecha_limite'=>'required|date_format:Y-m-d H:i:s',
        ]);

        $examen->update($request->all());

        return redirect()->back()->with('success','Examen actualizado con éxito!');
    }

    public function store(Request $request){
        $request->validate([
            'nombre'=>'required|string|max:255',
            'fecha_limite'=>'required|date_format:Y-m-d H:i:s',
        ]);

        $examen = new Examen();
        $examen->nombre = $request->nombre;
        $examen->fecha_limite = $request->fecha_limite;

        $examen->save();

        return redirect()->back()->with('success','Examen creado con éxito!');

    }

    public function destroy(Request $request){
        $Id = $request->input('IdExamen');
        $examen = Examen::find($Id);
        if($examen){
            $examen->delete();
            return redirect()->back()->with('success','Examen eliminado.');
        }else{
            return redirect()->back()->with('error','Examen no encontrado.');
        }
    }

}
