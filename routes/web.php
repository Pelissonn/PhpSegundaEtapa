<?php

use App\Models\Album;
use App\Models\Music;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (Request $request) {
    Log::info("Meu dado");
    return "Hello World";
});

Route::get('/home', function (Request $request) {
    return view('home', ['nome' => "renato"]);
});

Route::get("/users", function (Request $request) {
    $users = User::all(); 

    return $users;
});


Route::get("/create-test-music", function (Request $request) {
    Music::create([
        'name' => "Delírios",
        "album" => 'Baile',
        'artista' => 'FBC',
    ]);
});

Route::get("/musics", function (Request $request) {
    $musics = Music::all();
    return $musics;
});

Route::get('/perfil', function () {
    return view('perfil', ['nome' => 'Seu Nome Aqui']);
});

Route::get('/tarefas', function () {
    $tarefas = ['Estudar Blade', 'Salvar o mundo', 'Dormir'];
    return view('tarefas', compact('tarefas'));
});

Route::get('/perfil', [PerfilController::class, 'index']);

Route::get('/create-test-album', function () {
    $album = Album::create([
        'nome' => 'Dark Side of the Moon',
        'artista' => 'Pink Floyd',
        'ano_lancamento' => 1973,
        'url_imagem' => 'https://static.vecteezy.com/ti/vetor-gratis/p1/9169455-ceu-dourado-por-do-sol-na-costa-natureza-paisagem-vetor.jpg',
    ]);
    return 'Album criado! ID: ' . $album->id;
});

Route::get('/albuns', function () {
    return Album::all();
});