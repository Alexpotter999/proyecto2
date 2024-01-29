<?php

namespace App\Http\Controllers;

use App\Models\alumnos;
use Illuminate\Http\Request;

class TablaController extends Controller
{
    public function visualizar()
    {
        $datos = alumnos::all(); // Obtén todos los registros de la tabla

        return view('visualizar-tabla', compact('datos'));
    }

    //
}
