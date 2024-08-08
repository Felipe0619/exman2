<?php



namespace App\Http\Controllers;

use App\Models\Atraccion;
use App\Models\Especie;
use App\Models\Comentario;
use Illuminate\Http\Request;

class AtraccionController extends Controller
{
    public function index()
    {
        $atracciones = Atraccion::with('comentarios')->get();
        foreach ($atracciones as $atraccion) {
            $atraccion->calificacion_promedio = $atraccion->comentarios->avg('calificacion');
        }
        return view('atracciones.index', compact('atracciones'));
    }

    public function comentariosEntreValores($min, $max)
    {
        $comentarios = Comentario::whereBetween('calificacion', [$min, $max])->get();
        return view('comentarios.entrevalores', compact('comentarios'));
    }

    public function cantidadComentarios($id)
    {
        $atraccion = Atraccion::withCount('comentarios')->find($id);
        return view('atracciones.cantidadcomentarios', compact('atraccion'));
    }

    public function atraccionesPorEspecie($id)
    {
        $especie = Especie::with('atracciones')->find($id);
        return view('especies.atracciones', compact('especie'));
    }
}
