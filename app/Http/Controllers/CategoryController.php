<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories.home', compact('categories'));
    }

    public function save(Request $request){
        $request->validate([
            'name' => 'required'
        ],
        [
            'name.required' => 'Debe ingresar un nomnbre'
        ]    
    );
        Category::create($request->all());
        return redirect()->back()->with('msj','registro realizado satisfactoriamente');
    }

    public function create(){
        $categories = Category::all();
        return view('categories.create', compact('categories'));
    }

    
    public function delete(Category $category){
        $category->delete();
        return back()->with('success', 'Categoria eliminada');
    }
    
    public function edit(Category $category){
        $categories = Category::all();
        return view('categories.detail', compact('category', 'categories'));
    }
}
