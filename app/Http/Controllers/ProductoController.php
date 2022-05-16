<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function index()
    {
        //dd('Esto es una prueba');
        $consultas='esto es una variable';
        // return view('preuebas', compact('consultas'));
        //return response()->json($consultas);
        return $consultas;
    }
}
