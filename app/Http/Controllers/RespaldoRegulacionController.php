<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RespaldoRegulacion;

class RespaldoRegulacionController extends Controller
{
    // Método para mostrar la lista de productos de UPS
    public function indexUps(Request $request)
    {
        // Obtener todos los productos de la categoría "UPS"
        $productosQuery = RespaldoRegulacion::where('categoria', 'UPS');

        // Si se proporciona un filtro por subtítulo, aplicarlo
        if ($request->has('subtitulo')) {
            $productosQuery->where('subtitulo', $request->input('subtitulo'));
        }

        // Obtener los productos filtrados
        $productos = $productosQuery->get();

        // Obtener los subtítulos únicos para el filtro
        $subtitulos = $productos->pluck('subtitulo')->unique();

        return view('respaldo_regulacion.index_ups', compact('productos', 'subtitulos'));
    }

    // Método para mostrar los detalles de un producto de UPS
    public function showUps($slug)
    {
        // Obtener el producto por su slug
        $producto = RespaldoRegulacion::where('slug', $slug)->where('categoria', 'ups')->firstOrFail();

        // Retornar la vista con los detalles del producto
        return view('respaldo_regulacion.show_ups', compact('producto'));
    }

    // Método para mostrar la lista de productos de Reguladores
    public function indexReguladores(Request $request)
    {
        // Obtener todos los productos de Reguladores desde la base de datos
        $productosQuery = RespaldoRegulacion::where('categoria', 'Reguladores');

        // Si se proporciona un filtro por subtítulo, aplicarlo
        if ($request->has('subtitulo')) {
            $productosQuery->where('subtitulo', $request->input('subtitulo'));
        }

        // Obtener los productos filtrados
        $productos = $productosQuery->get();

        // Obtener los subtítulos únicos para el filtro
        $subtitulos = $productos->pluck('subtitulo')->unique();

        // Retornar la vista con los productos obtenidos
        return view('respaldo_regulacion.index_reguladores', compact('productos', 'subtitulos'));
    }

    // Método para mostrar los detalles de un regulador
    public function showReguladores($slug)
    {
        // Obtener el producto por su slug
        $producto = RespaldoRegulacion::where('slug', $slug)->where('categoria', 'reguladores')->firstOrFail();

        // Retornar la vista con los detalles del producto
        return view('respaldo_regulacion.show_reguladores', compact('producto'));
    }
}
