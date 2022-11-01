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

    public function MostrarEditarMoto(){

        $dadosMotos = Motos::all();
        return view('editarMoto',['registrosMotos' => $dadosMotos]);
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
        public function apagarMotos(Motos $registroMoto){
        
            //dd($registrosCaminhoes);
            $registroMoto->delete();
    
    
            return Redirect::route('editar-moto');
        }

        public function AlterarBancoMoto(Caminhao $registroMoto, Request $request){

            $banco = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
    
            ]);
    
            $registroMoto->fill($banco);
            $registroMoto->save();
    
            //dd($registrosCaminhoes);
    
            return Redirect::route('editar-moto');
        }


}
