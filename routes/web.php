<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;

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
/*
Route::get("/", [PacienteController::class, "index"]);
<<<<<<< HEAD
Route::post("/adicionar", [PacienteController::class, "adicionar"]);
/*Route::get("/", [PacienteController::class, "editar"]);
Route::post("/", [PacienteController::class, "atualizar"]);
Route::get("/", [PacienteController::class, "excluir"]);
Route::get("/", [PacienteController::class, "listar"]);*/

Route::post("/", [PacienteController::class, "adicionar"]);
Route::get("/", [PacienteController::class, "editar"]);
Route::post("/", [PacienteController::class, "atualizar"]);
Route::get("/", [PacienteController::class, "excluir"]);
Route::get("/listar", [PacienteController::class, "listar"]); 

Route::get("/", function(){
    return view('navbar');
Route::get("/listar", [PacienteController::class, "listar"]);
});

Route::get('/', function (){
    return view('Cadastrar');
});

