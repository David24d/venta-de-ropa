<?php

use App\Http\Controllers\TipousarioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TipousuarioController;

Route::get('/', function () {
    return view('tipo_usuario.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Rutas para el CRUD de Tipos de Usuario
Route::get('/tipousuario', [TipousarioController::class, 'index'])->name('tipousuario.index');
Route::get('/tipousuario/create', [TipousarioController::class, 'create'])->name('tipousuario.create');
Route::post('/tipousuario', [TipousarioController::class, 'store'])->name('tipousuario.store');
Route::get('/tipousuario/{tipousuario}', [TipousarioController::class, 'show'])->name('tipousuario.show');
Route::get('/tipousuario/{tipousuario}/edit', [TipousarioController::class, 'edit'])->name('tipousuario.edit');
Route::put('/tipousuario/{tipousuario}', [TipousarioController::class, 'update'])->name('tipousuario.update');
Route::delete('/tipousuario/{tipousuario}', [TipousarioController::class, 'destroy'])->name('tipousuario.destroy');



