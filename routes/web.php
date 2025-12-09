<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClothController;

Route::get('/', function () {
    return redirect()->route('clothes.index');
});

// Rotas explícitas do Armário Virtual
Route::get('clothes', [ClothController::class, 'index'])->name('clothes.index');
Route::get('clothes/create', [ClothController::class, 'create'])->name('clothes.create');
Route::post('clothes', [ClothController::class, 'store'])->name('clothes.store');
Route::get('clothes/{cloth}', [ClothController::class, 'show'])->name('clothes.show');
Route::get('clothes/{cloth}/edit', [ClothController::class, 'edit'])->name('clothes.edit');
Route::put('clothes/{cloth}', [ClothController::class, 'update'])->name('clothes.update');
Route::delete('clothes/{cloth}', [ClothController::class, 'destroy'])->name('clothes.destroy');