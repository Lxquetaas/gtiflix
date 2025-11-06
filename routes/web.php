<?php

use App\Models\Ator;
use App\Models\Filme;
use App\Models\Genero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/lucas', function (){
   echo 'Olá Lucas';
});

Route::get('/filmes/{filme}', function ($filme){
    echo 'Acessando dados do filme: ' .$filme;
 });

Route::view('/sobre','sobre');

Route::get('/', function() {
    $filmes = Filme::all();
    return view('lista-filmes',
    compact('filmes'));
});
Route::get('/detalhes-filme/{filme}',
 function (Filme $filme){
return view('detalhes-filme',compact('filme'));
 

})->name('detalhes-filme');

Route::view('/login','login')->name('login');

Route::post('/logar',function (Request $request){
    dd($request);
 })->name ('logar');