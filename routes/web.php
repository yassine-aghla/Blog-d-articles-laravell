<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\categorieController;
use App\http\Controllers\ArticleController;
use App\http\Controllers\CommentaireController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('categories',categorieController::class);
Route::get('Articles/edit/{article}',[ArticleController::class,'edit'])->name('Articles.edit');
Route::put('Articles/update/{article}',[ArticleController::class,'update'])->name('Articles.update');
Route::delete('Articles/{article}',[ArticleController::class,'destroy'])->name('Articles.destroy');
Route::get('Articles', [ArticleController::class, 'index'])->name('Articles.index');
Route::get('Articles/create', [ArticleController::class, 'create'])->name('Articles.create');
Route::post('Articles', [ArticleController::class, 'store'])->name('Articles.store');
Route::get('Articles/{article}', [ArticleController::class, 'show'])->name('Articles.show');
Route::get('Commentaires/create/{article}',[CommentaireController::class, 'create'])->name('Commentaire.create');
Route::Post('Commentaires',[CommentaireController::class,'store'])->name('Commentaire.store');
require __DIR__.'/auth.php';
