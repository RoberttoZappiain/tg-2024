<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        // Obtener un registro por categoría
        $tierras_fisicas = DB::table('tierras_fisicas as t1')
                             ->select('t1.id', 't1.categoria')
                             ->whereRaw('t1.id = (select min(t2.id) from tierras_fisicas t2 where t2.categoria = t1.categoria)')
                             ->get();

        // Pasar los datos a la vista
        return view('categories', ['tierras_fisicas' => $tierras_fisicas]);
    }
}
