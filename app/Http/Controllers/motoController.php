<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class motoController extends Controller
{
    public function mostrar()
    {
        return view('listarMotos');            
    }
}