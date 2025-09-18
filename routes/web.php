<?php

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
 