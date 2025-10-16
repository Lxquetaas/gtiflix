<?php

use App\Models\Ator;
use App\Models\Filme;
use App\Models\Genero;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lucas', function (){
   echo 'Olá Lucas';
});

Route::get('/filmes/{filme}', function ($filme){
    echo 'Acessando dados do filme: ' .$filme;
 });

Route::view('/sobre','sobre');

Route::get('/lista-filmes', function() {
    $filmes = Filme::all();
    return view('lista-filmes',
    compact('filmes'));
});