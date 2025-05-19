<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Muestra la vista de login
    public function showLoginForm()
    {
        return view('Front.auth.index');
    }

    // Maneja el intento de inicio de sesión
    public function login(Request $request)
    {
        // Validar el request (solo se requieren el email y la password)
        $request->validate([
            'user' => 'required|string',
            'pwd' => 'required|string',
        ]);

        $credentials = $request->only('user', 'pwd');
        // Intentar autenticar con las credenciales proporcionadas
        // if () {
        //     // Si la autenticación es exitosa, se inicia la sesión
        //     $request->session()->regenerate();

        //     // Redirigir al dashboard o a la ruta deseada
        //     return redirect()->intended('dashboard');
        // }
        if($this->attemp($credentials, '')){
            // Si la autenticación es exitosa, se inicia la sesión
            $request->session()->regenerate();

            // Redirigir al dashboard o a la ruta deseada
            return redirect()->intended('/admin');
        }

        // Si la autenticación falla, se devuelve al login con un mensaje de error
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    //Función basica de login
    // Hardcodeada porque debería de tener solo 1 usuario (el que añade noticias)
    private function attemp($credentials, string $type){
        if($type == 'DEFAULT'){
            return Auth::attempt($credentials);
        }

        return $credentials['user'] == "admin@proyectoplanclimac2.org" && $credentials['pwd'] == "planclimac21150.";
    }

    // Cerrar sesión
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirigir al login después de cerrar la sesión
        return redirect('/login');
    }

}
