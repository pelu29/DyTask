<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    //agregando las tareas

    public function store(Request $request){
        Tarea::create([
            'nombre_tarea'=>$request->nombre_tarea,
            'descripcion'=>$request->descripcion,
            'fecha'=>$request->fecha,
            'categoria'=>$request->categoria,
        ]);

        return redirect('/redireccion')->with('succes','Tarea agregada con exito');
    }

    public function index(){
        $resultado = Tarea::all();
        return view('redireccion', compact('resultado'))->with('resultado', $resultado);
    }

    public function destroy($id){
        $resultado = Tarea::destroy($id);
    
        if ($resultado) {
            return redirect()->back()->with('success', 'Tarea eliminada correctamente');
        }
    
        return redirect()->back()->with('error', 'Error, tarea no encontrada');
    }
    
    
    public function update(Request $request){

        $tarea = $request->input('id');
        $busqueda = Tarea::find($tarea);
        
        if(!$busqueda){
            return redirect()->back()->width('error','tarea no encontrada');
        }

        $busqueda->nombre_tarea = $request->input('nombre_tarea');
        $busqueda->descripcion = $request->input('descripcion');
        $busqueda->fecha = $request->input('fecha');
        $busqueda->categoria = $request->input('categoria');

        $busqueda->save();

        return redirect()->back()->with('success','tarea actualizada con exito');
    }
}
