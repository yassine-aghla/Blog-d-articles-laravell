<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categorieController;
use App\http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories',categorieController::class);
Route::resource('Articles',ArticleController::class);

