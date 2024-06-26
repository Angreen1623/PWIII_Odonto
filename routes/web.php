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
Route::post("/adicionar", [PacienteController::class, "adicionar"]);
/*
Route::post("/", [PacienteController::class, "atualizar"]);
Route::get("/", [PacienteController::class, "listar"]);*/

Route::get("/excluir/{id}", [PacienteController::class, "excluir"]);
Route::post("/adicionar", [PacienteController::class, "adicionar"]);
Route::get("/listar", [PacienteController::class, "listar"]);
Route::post("/atualizar/{id}", [PacienteController::class,"atualizar"]);
Route::get("/editar/{id}", [PacienteController::class,"editar"]);

Route::get('/', function (){
    return view('Cadastrar');
});