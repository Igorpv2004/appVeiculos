<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Motos;

class MotosController extends Controller
{
    public function FormularioCadastroMoto(){
        return view('cadastrarMoto');
    }

    
    public function SalvarBancoMoto(Request $request){

        $dadosMotos = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required',
    
        ]);
    
        Motos::create($dadosMotos);
    
        return Redirect::route('home');
    
    
        }
}