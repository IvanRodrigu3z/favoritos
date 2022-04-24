<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Favorito;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        $users = DB::table('users')->select('id','name')->paginate(10);
        return view('users.list', compact('users'));
    }

    public function goBack(){
        return back();
    }
}
