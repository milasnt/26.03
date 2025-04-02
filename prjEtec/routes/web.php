<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

Route::get('/', function () { return PrincipalController::home();})->name('home');
Route::get('/cursos', function () { return PrincipalController::cursos();})->name('cursos');
Route::get('/departamento', function () { return PrincipalController::departamento();})->name('departamento');
Route::get('/contato', function () { return PrincipalController::contato();})->name('contato');