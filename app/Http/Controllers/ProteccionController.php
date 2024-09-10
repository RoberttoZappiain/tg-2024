<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Proteccion;
use App\Models\Categoria;

class ProteccionController extends Controller
{
    public function index(Request $request, $categoria_slug)
    {
        // Obtener la categoría por el slug
        $categoria = DB::connection('mysql2')->table('categoria')->where('slug', $categoria_slug)->first();
        if (!$categoria) {
            abort(404);
        }

        // Obtener todas las subcategorías relacionadas con esta categoría
        $subcategorias = DB::connection('mysql2')->table('subcategoria_proteccion')
            ->join('proteccion', 'subcategoria_proteccion.id', '=', 'proteccion.subcategoria_id')
            ->select('subcategoria_proteccion.nombre_subcategoria', 'subcategoria_proteccion.slug', DB::raw('COUNT(proteccion.id) as productos_count'))
            ->where('proteccion.categoria_id', $categoria->id)
            ->groupBy('subcategoria_proteccion.id', 'subcategoria_proteccion.nombre_subcategoria', 'subcategoria_proteccion.slug')
            ->get();

        // Construir la consulta de productos
        $productosQuery = DB::connection('mysql2')->table('proteccion')
            ->join('subcategoria_proteccion', 'proteccion.subcategoria_id', '=', 'subcategoria_proteccion.id')
            ->select('proteccion.*', 'subcategoria_proteccion.nombre_subcategoria', 'subcategoria_proteccion.slug as subcategoria_slug')
            ->where('proteccion.categoria_id', $categoria->id);

        if ($request->has('subcategoria')) {
            $productosQuery->where('subcategoria_proteccion.slug', $request->input('subcategoria'));
        }
        $logos = DB::connection('mysql')->table('logos_familia_tg')->get();

        // Paginación de los productos
        $productos = $productosQuery->orderBy('nombre_kit', 'asc')->paginate(16);
        return view('proteccion.index', compact('categoria', 'productos', 'subcategorias', 'logos'));
    }
            // Método para mostrar los productos de una subcategoría específica dentro de una categoría
    public function subcategoria($categoria_slug, $subcategoria_slug)
    {
        // Obtener la categoría y subcategoría por sus slugs
        $categoria = DB::connection('mysql2')->table('categoria')->where('slug', $categoria_slug)->first();
        if (!$categoria) {
            abort(404);
        }

        $subcategoria = DB::connection('mysql2')->table('subcategoria_proteccion')->where('slug', $subcategoria_slug)->where('categoria_id', $categoria->id)->first();
        if (!$subcategoria) {
            abort(404);
        }

        // Obtener los productos dentro de esta subcategoría
        $productos = DB::connection('mysql2')->table('proteccion')->where('subcategoria_id', $subcategoria->id)->get();

        return view('proteccion.subcategoria', compact('categoria', 'subcategoria', 'productos'));
    }

    // Método para mostrar los detalles de un producto específico
    public function show($categoria_slug, $subcategoria_slug, $slug)
    {
        // Obtener la categoría, subcategoría y el producto por sus slugs
        $categoria = Categoria::where('slug', $categoria_slug)->firstOrFail();
        if (!$categoria) {
            abort(404);
        }


        $producto = Proteccion::where('slug', $slug)->firstOrFail();
        if (!$producto) {
            abort(404);
        }

        return view('proteccion.show', compact('categoria', 'producto'));
    }
}
