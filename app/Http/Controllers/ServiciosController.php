<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
class ServiciosController extends Controller
{
    public function levantamientos()
    {
        $logos = DB::table('logos_familia_tg')->get();
        return view('servicios.levantamientos', ['logos'=> $logos]);
    }
}