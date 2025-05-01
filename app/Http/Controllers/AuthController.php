<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Verifica se o usuário existe e é admin
        if (Auth::attempt($credentials)) {
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.dashboard');
            } else {
                Auth::logout();
                return back()->withErrors(['email' => 'Acesso permitido apenas para administradores.']);
            }
        }

        return back()->withErrors(['email' => 'Credenciais inválidas.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/adminlogin');
    }
}
