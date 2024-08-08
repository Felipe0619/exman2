<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtraccionController;

// Ruta para obtener la lista de atracciones con su calificación promedio
Route::get('/atracciones', [AtraccionController::class, 'index'])->name('atracciones.index');

// Ruta para obtener los comentarios con calificación entre dos valores dados
Route::get('/comentarios/{min}/{max}', [AtraccionController::class, 'comentariosEntreValores'])->name('comentarios.entrevalores');

// Ruta para obtener la cantidad de comentarios de una atracción específica
Route::get('/atraccion/{id}/comentarios', [AtraccionController::class, 'cantidadComentarios'])->name('atraccion.cantidadcomentarios');

// Ruta para obtener la lista de atracciones que exhiben una especie específica
Route::get('/especie/{id}/atracciones', [AtraccionController::class, 'atraccionesPorEspecie'])->name('especie.atracciones');
