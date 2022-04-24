<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FavoriteController extends Controller
{

    public function index(){ //lista los registros
        $user = auth()->id();
        $favorites = [];
        if(auth()->check()){
            $favorites = DB::table('favorites')->select('id','url', 'title')
                        ->where('user_id', '=', $user)->paginate(10); 
        }
        return view('favorites.list', compact('favorites'));
    }

    public function list(){
        
        return view('favorites.home');
    }

    public function create(){
        $categories = Category::all();

        $user = auth()->id();
        $favorites = [];
        if(auth()->check()){
            $favorites = DB::table('favorites')->select('id','url', 'title')
                        ->where('user_id', '=', $user)->paginate(10); 
        }

        return view('favorites.create', compact('categories', 'favorites'));
    }

    public function save(Request $request){ //guarda el registro
        $favorite = new Favorite;

        if(auth()->check()){
            $favorite->url = $request->input('url');
            $favorite->title = $request->input('title');
            $favorite->description = $request->input('description');
            $favorite->visibility = $request->input('visibility');
            $favorite->user_id = auth()->id();
            $favorite->save();
    
            $id_category = $request->input('category');
            $favorite->categories()->attach($id_category);
        }

        return redirect()->back();
    }

    public function delete(Favorite $favorite){ //elimina
        $favorite->delete();
        return back()->with('success','Favorito eliminado');
    }

    public function edit(Favorite $favorite){ //para editar
        $favorites = DB::table('favorites')->select('id','url', 'title')->paginate(10);   
        
        return view('favorites.detail', compact('favorite', 'favorites'));
    }

    public function listFavoriteUser($idUser){
        $users = DB::table('users')->select('id','name')->paginate(10);
        $favorites = DB::table('favorites')->where([
            ['user_id', $idUser],
            ['visibility', 'public']
        ])->take(10)->paginate(10); 
        return view('favorites.list', compact('favorites', 'users', 'idUser'));
    }

    public function userFavorites($id){
        return view('show-favorites', compact('id'));
    }
}
