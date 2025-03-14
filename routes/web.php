<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\LanguageController;

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

//Route::get('/alumno',  [AlumnosController::class, 'index'])->middleware(['auth', 'verified'])->name('alumno');


Route::resource('alumno',  AlumnosController::class)->middleware(['auth', 'verified']);


Route::view("about", "about");
Route::view("noticias", "noticias");
require __DIR__.'/auth.php';

//Route::get("language",function(){})->name("language");
Route::get('/language', LanguageController::class)->name('language');
