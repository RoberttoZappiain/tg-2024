<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuienesSomosController extends Controller
{
    public function show()
    {
        $logos = DB::connection('mysql')->table('logos_familia_tg')->get();

        return view('quienes-somos', compact('logos'));
    }
}
