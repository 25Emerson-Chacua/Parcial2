<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\mlibro;
use App\Models\Editorial;

class Controladorlibro extends Controller
{
    //
    public function index(){

        $producto = DB::table('libro as pro')
                ->join('editorial as cat','pro.editorial','=','cat.id')
                ->select('pro.id','pro.ISBN','pro.stock','pro.precio','pro.titulo','cat.nombre','cat.id as m')
        ->get();
        return view('libros.listado',['libro'=>$producto]);  
    }
}
