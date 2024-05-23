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

Route::get('/generos',[\App\Http\Controllers\generoController::class,'index']);
Route::get('/deletar/{id}',[\App\Http\Controllers\generoController::class,'destroy']);
Route::get('/inserir',[\App\Http\Controllers\generoController::class,'create']);
Route::post('/cadastrar/{id}',[\App\Http\Controllers\generoController::class,'store']);
Route::get('/alterar/{id}',[\App\Http\Controllers\generoController::class,'edit']);
Route::post('/update/{id}',[\App\Http\Controllers\generoController::class,'update']);
Route::get('/livros',[\App\Http\Controllers\livroController::class,'index']);
Route::get('/deletar_livro/{id}',[\App\Http\Controllers\livroController::class,'destroy']);
Route::get('/inserir_livro',[\App\Http\Controllers\livroController::class,'create']);
Route::post('/cadastrar_livro/{id}',[\App\Http\Controllers\livroController::class,'store']);
Route::get('/alterar_livro/{id}',[\App\Http\Controllers\livroController::class,'edit']);
Route::post('/update_livro/{id}',[\App\Http\Controllers\livroController::class,'update']);