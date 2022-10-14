<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCarro2 extends Controller
{
    public function mostrar()
    {
        return view('listarCarro2');            
    }
}