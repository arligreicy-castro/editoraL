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

Route::get('/',[\App\Http\Controllers\generoController::class,'index']);
Route::get('/deletar/{id}',[\App\Http\Controllers\generoController::class,'destroy']);
Route::get('/inserir/{id}',[\App\Http\Controllers\generoController::class,'create']);
Route::post('/cadastrar/{id}',[\App\Http\Controllers\generoController::class,'store']);
Route::get('/alterar/{id}',[\App\Http\Controllers\generoController::class,'edit']);
Route::get('/update/{id}',[\App\Http\Controllers\generoController::class,'update']);
