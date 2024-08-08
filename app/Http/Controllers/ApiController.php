<?php
namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Especie;
use App\Models\Atraccion;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function storeComentario(Request $request)
    {
        $request->validate([
            'id_atraccion' => 'required|integer|exists:atracciones,id',
            'nombre_usuario' => 'required|string|max:50',
            'calificacion' => 'required|integer|between:1,5',
            'detalles' => 'required|string|max:100',
        ]);

        $comentario = Comentario::create($request->all());

        return response()->json($comentario, 201);
    }

    public function listEspecies()
    {
        return response()->json(Especie::all());
    }

    public function getEspecie($id)
    {
        $atraccion = Atraccion::findOrFail($id);
        return response()->json($atraccion->especie);
    }

    public function editAtraccion(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:50',
            'descripcion' => 'nullable|string|max:50',
            'id_especie' => 'nullable|integer|exists:especies,id',
        ]);

        $atraccion = Atraccion::findOrFail($id);
        $atraccion->update($request->all());

        return response()->json($atraccion);
    }
}
