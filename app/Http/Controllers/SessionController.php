<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function store(){
        return view('auth.login');

    }

    public function login(){
        if(auth()->attempt(request(['email', 'password'])) === false){
            return back()->withErrors([
                'message' => 'correo o contraseña incorrectos, intenta de nuevo'
            ]);
        }
        return redirect()->to('/inicio/favorito');
    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
}
