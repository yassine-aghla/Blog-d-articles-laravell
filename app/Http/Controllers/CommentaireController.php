<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $commentaires=Article()::with('commenataire')->get();
    //     return view("Commentaire.index",compact('commentaires'));
        
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Article $article)
    {
        
       $commentaires=$article->commentaires()->with('user')->get();
        return view("Commentaire.create",compact('article','commentaires'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
   
        $validateData=$request->validate([
            'content'=>'required|string',
             'article_id'=>'required',
        ]);

        $validateData['user_id']=Auth::id();
        
        Commentaire::create($validateData);
        return redirect()->route('Articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
