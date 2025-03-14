<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->api(append:\App\Http\Middleware\ValidateHeaderMiddleware::class);
        $middleware->api(append:\App\Http\Middleware\SetHeaderMiddleware::class);
        $middleware->api(append:\App\Http\Middleware\LanguageMiddleware::class);


    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(fn(QueryException $e)=>errorQueryException($e));
        $exceptions->render(fn(ValidationException $e)=>errorValidationData($e)); //capturar el aerror al validar un campo, la excepcion que produce se captura

    })->create();



function errorQueryException(QueryException $e)
{
    return response()->json([
        "errors" => [
            "status" => 500,
            "title" => "Error en base de datos".$e->getMessage(),
            "Detail" => "La base de datos no responde, inténtalo de nuevo"
        ]
    ]);
}

function errorValidationData(ValidationException $e)
{
    return response()->json([
        "errors" => [
            "status" => 422,
            "title" => "Error validando campo",
            "detail" => "Error en el campo".key($e->errors()), //dame la clave de este array

        ]
    ]);
}
