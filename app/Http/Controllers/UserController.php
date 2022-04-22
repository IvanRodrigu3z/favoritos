<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(){
        return view('users.register');
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required',
        ],
        [
            'required' => 'Campo requerido',
            'unique' => 'Este correo ya esta registrado',
            'email' => 'Ingrese un correo valido'
        ]    
    );
        User::create($request->only('name','email') + [
            'password' => bcrypt($request->input('password'))
        ]);
        
        return redirect('/login');
    }
}
