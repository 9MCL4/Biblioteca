<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controlers\LivroControler;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/livros', [LivroController::class, 'index'])->name('livros.index');
Route::get('/livros/adicionar', [LivroController::class, 'create'])->name('livros.create');
Route::post('/livros', [LivroController::class, 'store'])->name('livros.store');