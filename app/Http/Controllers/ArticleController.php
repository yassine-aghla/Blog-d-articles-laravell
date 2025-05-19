<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
  
    public function index(){
     $Articles=Article::with('category')->get();
     return view('Articles.index',compact('Articles'));
    }

    public function create(){
        $articles=Article::all();
        $categories=Category::all();
        return view("Articles.create",compact('articles','categories'));
    }

    public function store(Request $request){
        $validateData=$request->validate([
            'titre'=>'required|string',
            'description'=>'required|string',
            'content'=>'required|string',
            'categorie_id'=>'required|exists:categories,id',
        ]);
        
       Article::create($validateData);
       return redirect()->route('Article.index')->with("succes","article creer avec succes");
    }
}
