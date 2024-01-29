<?php

namespace App\Http\Controllers;

use App\Models\asistencias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsistenciasController extends Controller
{
    public function index()
    {
        session_start();
        $resultados = DB::table('asistencias')
    ->select('asistencias.asistencia', 'asistencias.fecha')
    ->join('alumnos', 'asistencias.Id_alumno', '=', 'alumnos.Id_alumno')
    ->where('alumnos.Matricula_padre', '=', $_SESSION['matricula'])
    ->get();
    return view('asistencias', ['datos' => $resultados]);
    }
    public function contador()
    {
        session_start();
        //return('hola que hace');
        $mes=request('mes');
        $dia=request('dia');
        $año=request('año');

        $fecha=($año."-".$mes."-".$dia);
        echo $fecha;

        $asistencia = DB::table('asistencias')->select('asistencias.asistencia', 'asistencias.fecha')
        ->join('alumnos', 'asistencias.Id_alumno', '=', 'alumnos.Id_alumno')
        ->where('alumnos.Matricula_padre', '=', $_SESSION['matricula'])
        ->where('asistencias.fecha', '=', $fecha)
        ->where('asistencias.asistencia', '=', 'Asistencia')
        ->count();

        $falta = DB::table('asistencias')->select('asistencias.asistencia', 'asistencias.fecha')
        ->join('alumnos', 'asistencias.Id_alumno', '=', 'alumnos.Id_alumno')
        ->where('alumnos.Matricula_padre', '=', $_SESSION['matricula'])
        ->where('asistencias.fecha', '=', $fecha)
        ->where('asistencias.asistencia', '=', 'Falta')
        ->count();

        $justificante = DB::table('asistencias')->select('asistencias.asistencia', 'asistencias.fecha')
        ->join('alumnos', 'asistencias.Id_alumno', '=', 'alumnos.Id_alumno')
        ->where('alumnos.Matricula_padre', '=', $_SESSION['matricula'])
        ->where('asistencias.fecha', '=', $fecha)
        ->where('asistencias.asistencia', '=', 'Justificante')
        ->count();

        return(view('asistencias',
        ['asistencia' => $asistencia,
        'falta' => $falta,
        'justificante' => $justificante]
        ));

    }
}
