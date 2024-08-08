<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/comentarios', [ApiController::class, 'storeComentario']);
    Route::get('/especies', [ApiController::class, 'listEspecies']);
    Route::get('/atracciones/{id}/especie', [ApiController::class, 'getEspecie']);
    Route::put('/atracciones/{id}', [ApiController::class, 'editAtraccion']);
});
