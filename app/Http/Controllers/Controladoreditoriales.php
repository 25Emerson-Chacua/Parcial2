<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\meditorial;

class Controladoreditoriales extends Controller
{
    //
    public function index(){

        $clientes = DB::table('editorial')->get();
        return view('editoriales.listado',['editorial'=>$clientes]);
    }

    public function formularioReg()
    {
        //Mostrar el formulario de registro y la captura de datos
        return view('editoriales.form_registro');
    }


    public function registrar(Request $request)
    {
        // Registro de una Categoria en la base de datos a traves del Modelo
        $category = new meditorial();
        $category->nombre = $request->input('nombre');
        $category->direccion = $request->input('direccion');
        $category->ciudad = $request->input('ciudad');
        $category->telefono = $request->input('telefono');
        $category->save();
        return redirect()->route('listadoEditoriales');
    }
    public function formularioAct($id){
        $editorial = meditorial::findOrFail($id);
        return view('editoriales.form_actualiza', compact('editorial'));
    }

    public function actualizar(Request $request, $id){
        // Realizar la actualizacion en la base de datos
        $category= meditorial::findOrFail($id);
        $category->nombre = $request->input('nombre');
        $category->direccion = $request->input('direccion');
        $category->ciudad = $request->input('ciudad');
        $category->telefono = $request->input('telefono');
        $category->save();
        return redirect()->route('listadoEditoriales');
    }
}
