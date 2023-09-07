<?php

use App\Http\Controllers\Backend\VendedorController;
use App\Http\Controllers\Backend\VendedorPerfilController;
use Illuminate\Support\Facades\Route;


Route::get('dashboard', [VendedorController::class, 'dashboard'])->name('dashboard');
Route::get('perfil', [VendedorPerfilController::class, 'index'])->name('perfil');
Route::put('perfil/actualizar', [VendedorPerfilController::class, 'actualizarPerfil'])->name('perfil.actualizar');
Route::put('perfil/actualizar/password', [VendedorPerfilController::class, 'actualizarPassword'])->name('perfil.actualizar-password');

