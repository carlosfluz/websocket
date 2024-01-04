<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('painel');
});

Route::get('/senhas', function () {
    return view('senhas');
});

Route::get("enviar/{senha}", "App\Http\Controllers\HomeController@enviar")->name("enviar");

Route::get('/selecionarsenha', [\App\Http\Controllers\SenhaController::class, "selecionar_senha"])->name('selecionar');

Route::get('/gerarsenha/{senha}', [\App\Http\Controllers\SenhaController::class, "store"])->name('gerar');

