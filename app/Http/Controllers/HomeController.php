<?php

namespace App\Http\Controllers;
use App\Models\CarruselImagene;
use App\Models\Familia; // Importa el modelo de Familias
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function show()
    {
        // Obtener todas las imágenes activas del carrusel
        $imagenes = CarruselImagene::where('estado', 'activo')->orderBy('orden', 'asc')->get();

        // Obtener todas las familias
        $familiasFirst = Familia::orderBy('indice', 'asc')->take(5)->get();
        $familiasLast = Familia::orderBy('indice', 'asc')->skip(5)->take(5)->get();

        $logos = DB::connection('mysql')->table('logos_familia_tg')->get();

        // Pasar las imágenes a la vista home
        return view('home', compact('imagenes', 'familiasFirst', 'familiasLast', 'logos'));    }
}
