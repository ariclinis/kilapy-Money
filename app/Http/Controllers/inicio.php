<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inicio extends Controller
{

    public function inicio()
    {
        return view('inicio');
    }
    public function sobre()
    {
        return view('sobrePlataforma');
    }
}
