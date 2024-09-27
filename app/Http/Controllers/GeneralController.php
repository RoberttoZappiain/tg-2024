<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Familia;  // Importar el modelo Familia
use App\Models\Categoria;  // Importar el modelo Categoria

class GeneralController extends Controller
{
    public function index($table)
    {
        // Reemplazar los guiones por guiones bajos para mantener consistencia
        $table = str_replace('-', '_', $table);

        // Verificar si estamos trabajando con la tabla `familias`
        if ($table === 'familias') {
            // Obtener todos los registros de la tabla familias
            $familias = DB::connection()->table($table)->get();

            // Renderizar la vista de familias con los registros
            return view('familias.index', compact('familias', 'logos'));
        }

        // Si no es la tabla familias, usar la lógica actual
        $productos = DB::connection('mysql2')->table($table)->get();
        $categorias = $productos->pluck('categoria')->unique();
        $logos = DB::connection('mysql')->table('logos_familia_tg')->get();

        $view = $this->resolveView($table, 'index');
        return view($view, compact('productos', 'categorias', 'logos'));
    }

    public function show($categoria_slug, $subcategoria_slug, $slug)
    {
        $logos = DB::connection('mysql')->table('logos_familia_tg')->get();

        // Obtener el producto basado en el slug del producto, subcategoría y categoría
        $producto = DB::table('productos')
            ->join('subcategorias', 'productos.subcategoria_id', '=', 'subcategorias.id')
            ->join('categorias', 'subcategorias.categoria_id', '=', 'categorias.id')
            ->join('familias', 'categorias.familia_id', '=', 'familias.id')
            ->where('productos.slug', $slug)
            ->where('subcategorias.slug', $subcategoria_slug)
            ->where('categorias.slug', $categoria_slug)
            ->select(
                'productos.*',
                'subcategorias.nombre as nombre_subcategoria',
                'subcategorias.slug as subcategoria_slug',
                'categorias.nombre as nombre_categoria',
                'categorias.slug as categoria_slug',
                'categorias.familia_id',
                'familias.nombre as nombre_familia',
                'familias.slug as familia_slug'
            )
            ->first();
        // Si no se encuentra el producto, lanzar un error 404
        abort_if(!$producto, 404, 'Producto no encontrado');
            // Obtener productos relacionados (basado en la misma subcategoría, excluyendo el producto actual)
        $productosRelacionados = DB::table('productos')
        ->join('subcategorias', 'productos.subcategoria_id', '=', 'subcategorias.id')
        ->join('categorias', 'subcategorias.categoria_id', '=', 'categorias.id') // Unir con categorías para obtener el slug
        ->where('subcategorias.id', $producto->subcategoria_id)
        ->where('productos.id', '!=', $producto->id) // Excluir el producto actual
        ->select('productos.*', 'subcategorias.slug as subcategoria_slug', 'categorias.slug as categoria_slug') // Seleccionar el slug de la categoría
        ->limit(4)
        ->get();

            // **Nueva consulta adicional**: Obtener productos adicionales de la misma familia para la tabla comparativa
        $productosParaComparar = DB::table('productos')
        ->join('subcategorias', 'productos.subcategoria_id', '=', 'subcategorias.id')
        ->join('categorias', 'subcategorias.categoria_id', '=', 'categorias.id')
        ->where('categorias.familia_id', $producto->familia_id)
        ->where('productos.id', '!=', $producto->id) // Excluir el producto actual
        ->whereNotIn('productos.id', $productosRelacionados->pluck('id')) // Excluir los productos relacionados ya obtenidos
        ->select(
            'productos.*',
            'subcategorias.nombre as nombre_subcategoria',
            'subcategorias.slug as subcategoria_slug',
            'categorias.nombre as nombre_categoria',
            'categorias.slug as categoria_slug'
        )
        ->limit(4)
        ->get();

        // Retornar la vista con los datos necesarios para el breadcrumb
        return view('familias.show', compact('producto', 'productosRelacionados', 'logos', 'productosParaComparar'));
    }

    public function showSubcategoria($categoria_slug, $subcategoria_slug)
    {
        $logos = DB::connection('mysql')->table('logos_familia_tg')->get();

        // Obtener la categoría basada en el slug
        $categoria = DB::table('categorias')
            ->where('slug', $categoria_slug)
            ->first();

        // Verificar si la categoría existe
        if (!$categoria) {
            abort(404, 'Categoría no encontrada');
        }

        // Obtener la subcategoría basada en el slug y la categoria_id
        $subcategoria = DB::table('subcategorias')
            ->where('slug', $subcategoria_slug)
            ->where('categoria_id', $categoria->id)
            ->first();

        // Verificar si la subcategoría existe
        if (!$subcategoria) {
            abort(404, 'Subcategoría no encontrada');
        }

         // Obtener la familia relacionada con la categoría
        $familia = DB::table('familias')
        ->join('categorias', 'familias.id', '=', 'categorias.familia_id')
        ->where('categorias.id', $categoria->id)
        ->select('familias.*')
        ->first();

        $subcategoriasRelacionadas = DB::table('subcategorias')
        ->join('categorias', 'subcategorias.categoria_id', '=', 'categorias.id') // Unir con categorías para obtener el slug
        ->where('subcategorias.categoria_id', $subcategoria->categoria_id) // Obtener subcategorías de la misma categoría
        ->where('subcategorias.id', '!=', $subcategoria->id) // Excluir la subcategoría actual
        ->select('subcategorias.*', 'categorias.slug as categoria_slug') // Seleccionar los campos necesarios, incluyendo el slug de la categoría
        ->limit(4) // Limitar la cantidad de subcategorías relacionadas
        ->get();

        $subcategoriasParaComparar = DB::table('subcategorias')
        ->join('categorias', 'subcategorias.categoria_id', '=', 'categorias.id')
        ->where('categorias.familia_id', $familia->id) // Obtener subcategorías que pertenecen a la misma familia
        ->where('subcategorias.id', '!=', $subcategoria->id) // Excluir la subcategoría actual
        ->whereNotIn('subcategorias.id', $subcategoriasRelacionadas->pluck('id')) // Excluir las subcategorías relacionadas ya obtenidas
        ->select(
            'subcategorias.*',
            'categorias.nombre as nombre_categoria',
            'categorias.slug as categoria_slug'
        )
        ->limit(4) // Limitar el número de subcategorías para comparar
        ->get();
        // Si todo está bien, devolver la vista
        return view('familias.show_category', compact('categoria', 'subcategoria', 'familia', 'subcategoriasRelacionadas', 'subcategoriasParaComparar', 'logos'));
    }
    // Resolver el modelo basado en la tabla
    protected function resolveModel($table)
    {
        $models = [
            'banco_capacitores' => \App\Models\BancoCapacitores::class,
            'infraestructura' => \App\Models\Infraestructura::class,
            'refrigeracion' => \App\Models\Refrigeracion::class,
            'iluminacion' => \App\Models\Iluminacion::class,
            'telemetria_control' => \App\Models\TelemetriaControl::class,
            'familias' => \App\Models\Familia::class, // Agregar familias como modelo
        ];

        return $models[$table] ?? abort(404);
    }

    // Resolver la vista correspondiente para cada tabla y tipo (index o show)
    protected function resolveView($table, $type = 'index')
    {
        $views = [
            'banco_capacitores' => 'banco_capacitores.' . $type,
            'infraestructura' => 'infraestructura.' . $type,
            'refrigeracion' => 'refrigeracion.' . $type,
            'iluminacion' => 'iluminacion.' . $type,
            'telemetria_control' => 'telemetria_control.' . $type,
            'familias' => 'familias.' . $type, // Agregar la vista de familias
        ];

        return $views[$table] ?? abort(404);
    }

    public function showFamilia($slug)
    {
        // Obtener la familia por el slug
        $familia = DB::table('familias')->where('slug', $slug)->first();
        $logos = DB::connection('mysql')->table('logos_familia_tg')->get();

        // Si no se encuentra la familia, lanzar un error 404
        abort_if(!$familia, 404, 'Familia no encontrada');

        // Obtener todas las subcategorías de la familia, incluso si no tienen productos
        $subcategorias = DB::table('subcategorias')
            ->join('categorias', 'subcategorias.categoria_id', '=', 'categorias.id')
            ->leftJoin('productos', 'subcategorias.id', '=', 'productos.subcategoria_id')
            ->where('categorias.familia_id', $familia->id)
            ->select(
                'subcategorias.*',
                'categorias.nombre as nombre_categoria',
                'categorias.slug as categoria_slug',
                DB::raw('COUNT(productos.id) as productos_count')
            )
            ->groupBy('subcategorias.id', 'categorias.id')
            ->get();

        // Obtener la subcategoría activa desde el query string
        $activeSubcategoria = request('subcategoria');

        // Obtener los productos filtrados por la subcategoría activa, si se seleccionó una
        $productos = DB::table('productos')
            ->join('subcategorias', 'productos.subcategoria_id', '=', 'subcategorias.id')
            ->join('categorias', 'subcategorias.categoria_id', '=', 'categorias.id')
            ->where('categorias.familia_id', $familia->id)
            ->when($activeSubcategoria, function ($query, $activeSubcategoria) {
                return $query->where('subcategorias.slug', $activeSubcategoria);
            })
            ->select(
                'productos.*',
                'subcategorias.nombre as nombre_subcategoria',
                'subcategorias.slug as subcategoria_slug',
                'categorias.slug as categoria_slug'
            )
            ->paginate(12);

        // Retornar la vista con los datos
        return view('familias.index', compact('familia', 'subcategorias', 'productos', 'activeSubcategoria', 'logos'));
    }
}
