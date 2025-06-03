<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
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
        $validateData['user_id']=Auth::id();

        
       Article::create($validateData);
       return redirect()->route('Articles.index')->with("succes","article creer avec succes");
    }

    public function edit(Article $article){
         $categories=Category::all();
          return view('Articles.edit',compact('article','categories'));
           
    }

    public function update(Request $request,Article $article){
            $validateData=$request->validate([
            'titre'=>'required|string',
            'description'=>'required|string',
            'content'=>'required|string',
            'categorie_id'=>'required|exists:categories,id',
            'user_id' => Auth::id(),
        ]);

        $article->update($validateData);
        return redirect(route('Articles.index'));
    }

    public function destroy(Article $article){
        $article->delete();
        return redirect()->route('Articles.index');
    }

    public function show(Article $article)
{
    return view('Articles.show');
}
}
