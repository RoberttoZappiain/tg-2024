<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MultimediaController extends Controller
{
    public function show()
    {
        $logos = DB::table('logos_familia_tg')->get();
        return view('Multimedia',['logos' => $logos]);
    }
}
