<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AlumnosController;


Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/alumnos',  [AlumnoController::class, 'index'])->middleware(['auth', 'verified'])->name('alumnos');


Route::resource('alumno',  AlumnosController::class);


Route::view("about", "about");
Route::view("noticias", "noticias");
require __DIR__.'/auth.php';
