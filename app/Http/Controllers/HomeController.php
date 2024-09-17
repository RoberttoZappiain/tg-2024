<?php

namespace App\Http\Controllers;
use App\Models\CarruselImagene;
use App\Models\Familia; // Importa el modelo de Familias
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        // Obtener todas las imágenes activas del carrusel
        $imagenes = CarruselImagene::where('estado', 'activo')->orderBy('orden', 'asc')->get();

        // Obtener todas las familias
        $familias = Familia::all(); // Obtén todos los registros de la tabla 'familias'

        // Pasar las imágenes a la vista home
        return view('home', compact('imagenes', 'familias'));    }
}
