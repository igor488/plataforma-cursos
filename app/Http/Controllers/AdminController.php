<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.dashboard');
            }
            Auth::logout();
            return redirect()->route('admin.login')->withErrors(['email' => 'Acesso não autorizado']);
        }

        return redirect()->back()->withErrors(['email' => 'Credenciais inválidas']);
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
