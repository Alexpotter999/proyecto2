<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\alumnos;
use App\Models\docentes;
use App\Models\tutores;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function store()
    {
    //return $request-> get(('usuario'));
    $usuario=request('usuario');

    $password= request('password');

    $letras=preg_replace("/[0-9]/","",$usuario);

    switch ($letras){
        case "D":
            $user=docentes::where('Matricula_D','=',$usuario)
            ->where('Password_D','=',$password)
            ->count();
        if($user>=1){
            //return 'la consulta funciona';
            return view('indexd');

        }
        else{
        ?>
        <script>
            alert('matricula o contraseña incorrecta')
        </script>
        <?php
        return view('login');
        }
        break;
        case "A":
            $user=admin::where('Matricula','=',$usuario)
            ->where('Password','=',$password)
            ->count();
        if($user>=1){
            //return 'la consulta funciona';
            return view('indexa');
        }
        else{
        ?>
        <script>
            alert('matricula o contraseña incorrecta')
        </script>
        <?php
        return view('login');
        }
        break;
        case "E":
            $user=alumnos::where('Matricula','=',$usuario)
            ->where('Password','=',$password)
            ->count();
        if($user>=1){
            //return 'la consulta funciona';
            return view('indexe');
        }
        else{
        ?>
        <script>
            alert('matricula o contraseña incorrecta')
        </script>
        <?php
            return view('login');
        }
        break;

        case "T":
            $user=tutores::where('Matricula','=',$usuario)
            ->where('Password','=',$password)
            ->count();
            if($user>=1){
                $matricula=tutores::where('Matricula','=',$usuario)
                ->value('Matricula');
                session_start();
                $_SESSION['matricula']=$matricula
                ;
            //return 'la consulta funciona';
            return view('indext');
        }
        else{
        ?>
        <script>
            alert('matricula o contraseña incorrecta')
        </script>
        <?php
        return view('login');
        }
        break;
        default:
        ?>
        <script>
        alert('matricula o contraseña incorrecta')
        </script>
        <?php
        return view('login');
        break;



    }

    }
    //
}
