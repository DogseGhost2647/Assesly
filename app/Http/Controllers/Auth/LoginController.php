<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }
    
    public function login(Request $request){
        $credentials = $request->only('usuario','password');

        $user= \App\Models\Usuario::where('usuario', $credentials['usuario'])->first();

        if($user && Hash::check($credentials['password'], $user->password)){
            Auth::guard('usuarios')->login($user);
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'usuario' => 'las credenciales no coinciden con nuestro registro',
        ]);
    }

    public function logout(Request $request){
        Auth::guard('usuarios')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
