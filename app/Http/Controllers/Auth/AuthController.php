<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('Front.auth.index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'user' => 'required|string',
            'pwd' => 'required|string',
        ]);

        $credentials = $request->only('user', 'pwd');

        if ($this->attempt($credentials)) {

            // Seguridad: evita session fixation
            $request->session()->regenerate();

            // Guardamos sesión
            session([
                'is_admin' => true,
                'admin_email' => $credentials['user'],
                'logged_at' => now()->toDateTimeString(),
            ]);

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'user' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    private function attempt(array $credentials): bool
    {
        $user = trim($credentials['user']);
        $password = trim($credentials['pwd']);
        $adminEmail = trim(config('admin.email'));
        $adminPassword = trim(config('admin.password'));

        return $user === $adminEmail && $password === $adminPassword;
    }

    public function logout(Request $request)
    {
        Auth::logout(); // por compatibilidad

        $request->session()->flush(); // borra todo

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
