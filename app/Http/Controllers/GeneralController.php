<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeneralController extends Controller
{
    public function index($table)
    {
        $table = str_replace('-', '_', $table);

        // Obtener todos los registros de la tabla
        $productos = DB::connection('mysql2')->table($table)->get();

        // Obtener las categorías únicas desde los productos
        $categorias = $productos->pluck('categoria')->unique();
        $logos = DB::connection('mysql')->table('logos_familia_tg')->get();

        // Renderizar la vista correspondiente con los productos y las categorías
        $view = $this->resolveView($table, 'index');
        return view($view, compact('productos', 'categorias', 'logos'));
    }
    public function show($table, $slug)
    {
        $table = str_replace('-', '_', $table);

        // Resolver el modelo dinámicamente basado en la tabla
        $modelClass = $this->resolveModel($table);

        // Consultar el registro usando el modelo resuelto
        $producto = $modelClass::where('slug', $slug)->firstOrFail();

        return view($this->resolveView($table, 'show'), compact('producto'));
    }

    // Resolver el modelo basado en la tabla
    protected function resolveModel($table)
    {
        // Mapear la tabla al nombre del modelo
        $models = [
            'banco_capacitores' => \App\Models\BancoCapacitores::class,
            'infraestructura' => \App\Models\Infraestructura::class,
            'refrigeracion' => \App\Models\Refrigeracion::class,
            'iluminacion' => \App\Models\Iluminacion::class,
            'telemetria_control' => \App\Models\TelemetriaControl::class,
            // Agrega más mapeos aquí para otras tablas
        ];

        // Si no se encuentra el modelo, retornar un error 404
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
            // Agrega más mapeos aquí para otras tablas
        ];

        // Si no se encuentra la vista, retornar un error 404
        return $views[$table] ?? abort(404);
    }

    // Resolver la categoría basado en la tabla y el producto
    protected function resolveCategoria($table, $producto)
    {
        // Generalmente, la categoría estará relacionada al producto mediante una relación o un campo específico.
        // Aquí puedes usar un campo de relación como `categoria_id` o un nombre directo.
        switch ($table) {
            case 'banco_capacitores':
                return 'Banco de Capacitores'; // Devuelve el nombre de la categoría
            case 'infraestructura':
                return 'Infraestructura';
            case 'refrigeracion':
                return 'Refrigeración';
            case 'iluminacion':
                return 'Iluminación';
            case 'telemetria_control':
                return 'Telemetría y Control';
            default:
                return 'Categoría Desconocida';
        }
    }

    // Resolver la subcategoría basado en la tabla y el producto
    protected function resolveSubcategoria($table, $producto)
    {
        // Similar a la categoría, puedes obtener la subcategoría basada en un campo específico del producto.
        switch ($table) {
            case 'banco_capacitores':
            case 'infraestructura':
            case 'refrigeracion':
            case 'iluminacion':
            case 'telemetria_control':
                return $producto->nombre_kit; // Puedes usar el campo `nombre_kit` como subcategoría
            default:
                return 'Subcategoría Desconocida';
        }
    }
}
