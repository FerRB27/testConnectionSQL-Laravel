<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index()
    {
        // Obtener los datos de la tabla Productos
        $productos = DB::table('Productos')->get();

        // Pasar los datos a la vista
        return view('newView', compact('productos'));
    }
}
