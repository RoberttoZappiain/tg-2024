<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EventosController extends Controller
{
    public function show()
    {
        $logos = DB::table('logos_familia_tg')->get();
        return view('Eventos',['logos' => $logos]);
    }
}
