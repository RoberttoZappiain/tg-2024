<?php

namespace App\Http\Controllers;
use App\Models\CarruselImagene;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManualesController extends Controller
{
    public function show(){
        $logos = DB::connection('mysql')->table('logos_familia_tg')->get();

        return view('manuales', compact('logos'));

    }
}
