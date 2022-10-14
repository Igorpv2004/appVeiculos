<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listarCarro extends Controller
{
    public function lista()
    {
        return view('listarCarro');            
    }
}