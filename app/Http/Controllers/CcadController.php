<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CcadController extends Controller
{
    public function show()
    {
        $logos = DB::table('logos_familia_tg')->get();
        return view('CCAD',['logos' => $logos]);
    }
}
