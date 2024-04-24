<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [ContatoController::class, "index"]);
Route::post("/", [ContatoController::class, "adicionar"]);
Route::get("/", [ContatoController::class, "editar"]);
Route::post("/", [ContatoController::class, "atualizar"]);
Route::get("/", [ContatoController::class, "excluir"]);
Route::get("/", [ContatoController::class, "listar"]);