<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;


// routes/api.php

Route::apiResource('albums', 'App\Http\Controllers\Api\AlbumController');



 

//Log::info('________________________________________Entrando a Store'); // Línea de registro agregada
 

 

// Route::group(['prefix' => 'api'], function () {
//     // Route::get('/albums', [AlbumController::class, 'index']);
//     Log::info('--------------------a prefix entra');
//     Route::post('/albums', function (Request $request) {
//         $ip = $request->ip();
//         $route = $request->path();
//         $method = $request->method();
//         $content = $request->all();

//         Log::info('Entrando a Store - IP: ' . $ip);
//         Log::info('Ruta: ' . $route);
//         Log::info('Método: ' . $method);
//         Log::info('Contenido de la solicitud: ' . json_encode($content));

//         return AlbumController::store();
//     });
//     // Route::get('/albums/{id}', [AlbumController::class, 'show']);
//     // Route::put('/albums/{id}', [AlbumController::class, 'update']);
//     // Route::delete('/albums/{id}', [AlbumController::class, 'destroy']);
//});