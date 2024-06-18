<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuienesSomosController extends Controller
{
    public function show()
    {
        return view('quienes-somos');
    }
}
