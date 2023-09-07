<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\PerfilController;
use App\Http\Controllers\Backend\SliderController;
use Illuminate\Support\Facades\Route;

/**
 * Admin routes
 */
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

/**
 * Perfil routes
 */
Route::get('perfil', [PerfilController::class, 'index'])->name('perfil');
Route::put('perfil/actualizar', [PerfilController::class, 'actualizarPerfil'])->name('perfil.actualizar');
Route::put('perfil/actualizar/password', [PerfilController::class, 'actualizarPassword'])->name('password.actualizar');

/**
 * Slider routes
 */
Route::resource('slider', SliderController::class);
