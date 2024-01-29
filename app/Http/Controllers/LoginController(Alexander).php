<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        // Validación del formulario
        $request->validate([
            'usuario' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('usuario', 'password');

        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            return redirect('/dashboard'); // Cambia '/dashboard' por la ruta a la que deseas redirigir después del inicio de sesión exitoso
        } else {
            // Autenticación fallida
            return redirect()->back()->withInput()->withErrors(['message' => 'Credenciales incorrectas. Inténtelo de nuevo.']);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}

