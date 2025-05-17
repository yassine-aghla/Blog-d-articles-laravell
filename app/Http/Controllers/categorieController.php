<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class categorieController extends Controller
{
     public function index(){
        $categorie=Category::all();
        return view('categories.index',compact('categorie'));
     }

     public function create(){
        return view('categories.create');
     }

     public function store(Request $request){
        
           $validatedData= $request->validate(['name'=>'required|string',]);
      Category::create($validatedData);

    return redirect()->route('categories.index')
        ->with('success', 'Catégorie créée avec succès!');
     }

     public function edit(Request $request){
         $categorie=Category::all();
        return view('categories.edit',compact('categorie'));
     }

     public function update(Request $request,Category $categorie){
        
     }
}
