<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        // Especifica la conexión 'mysql' en la consulta
        $tierras_fisicas = DB::connection('mysql')->table('tierras_fisicas as t1')
            ->select('t1.id', 't1.categoria', 't1.url_img_1', DB::raw("TRIM(BOTH '•' FROM SUBSTRING_INDEX(t1.caracteristicas, '.', 1)) as caracteristicas"), 'badge')
            ->whereRaw('t1.id = (select min(t2.id) from tierras_fisicas t2 where t2.categoria = t1.categoria)')
            ->get();

        $logos = DB::connection('mysql')->table('logos_familia_tg')->get();

        return view('proteccion.sistemas-tierra-fisica', ['tierras_fisicas' => $tierras_fisicas, 'logos' => $logos]);
    }

    public function show($table, $categoria)
    {
        
        $categoriaNormalizada = str_replace('-', ' ', $categoria);
        $table = str_replace('-', '_', $table);
        // Especifica la conexión 'mysql' en la consulta
        $items = DB::connection('mysql')->table($table)->where('categoria', $categoriaNormalizada)->get();

        return view('proteccion.categoria_content', ['items' => $items, 'categoria' => $categoriaNormalizada, 'table' => $table]);
    }

    public function kitDetail($table, $categoria, $nombre_kit)
    {
        $categoria = str_replace('-', ' ', $categoria);
        $nombre_kit = str_replace('-', ' ', $nombre_kit);

        // Especifica la conexión 'mysql' en la consulta
        $kit = DB::connection('mysql')->table($table)
            ->where('nombre_kit', $nombre_kit)
            ->orWhere('nombre_kit', str_replace(' ', '-', $nombre_kit))
            ->first();

        if (!$kit) {
            abort(404);
        }

        $pdfPath = url($kit->url_ficha_tecn) . '#toolbar=0&navpanes=0';
        $pdfPathManual = url($kit->url_manual_pdf) . '#toolbar=0&navpanes=0';
        $url_model_3d = url($kit->url_model_3d);

        return view('tierras_fisicas.kit_detail', ['kit' => $kit, 'pdfPath' => $pdfPath, 'pdfPathManual' => $pdfPathManual, 'url_model_3d' => $url_model_3d]);
    }
}
