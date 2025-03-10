<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::resource("alumnos", AlumnoApiController::class); //es lo mismo que escribir las 7 rutas, el edit, destroy, etc, ya lo hace laravel
