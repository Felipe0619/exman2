<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_atraccion' => 'required|exists:atracciones,id',
            'nombre_usuario' => 'required|string|max:50',
            'calificacion' => 'required|integer|min:1|max:5',
            'detalles' => 'nullable|string|max:100',
        ]);

        $comentario = Comentario::create($request->all());
        return response()->json($comentario, 201);
    }
}
