<?php

use Illuminate\Support\Facades\Route;
use LaraDev\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/form', 'form');

/*
Passo a passo: Definir rota -> Criar controlador -> Criar o método -> Camada View
Route:: verbo http('URI', Controller@método);
Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);
*/

Route::get('/users/1',  [UserController::class, 'index']);
Route::get('/getData',  [UserController::class, 'getData']);
Route::post('/postData',  [UserController::class, 'postData']);
