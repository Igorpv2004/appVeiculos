<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Carros;

class CarrosController extends Controller
{
    public function FormularioCadastroCarro(){
        return view('cadastrarCarro');
    }

    public function MostrarEditarCarro(){

        $dadosCarros = Carros::all();
        return view('editarCarro',['registrosCarros' => $dadosCarros]);
    }
    public function SalvarBancoCarro(Request $request){

        $dadosCarros = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required',
    
        ]);
    
        Carros::create($dadosCarros);
    
        return Redirect::route('home');
    
    
        }

        public function apagarCarro(Carros $registroCarro){
        
            //dd($registrosCaminhoes);
            $registroCarro->delete();
    
    
            return Redirect::route('editar-carro');
        }
}
