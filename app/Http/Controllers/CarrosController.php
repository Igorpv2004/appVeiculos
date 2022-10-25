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

    public function MostrarEditarCarro(Request $request){
        //dd($dadosCaminhao);
        $dadosCarro = Carros::query();
        $dadosCarro->when($request->marca,function($query, $v1){
            $query->where('marca','like','%'.$v1.'%');
        });

        $dadosCarro = $dadosCarro->get();
        //dd($dadosCaminhao);
        return view('editarCarro',['registroCarro' => $dadosCarro]);
        
    }
    public function SalvarBancoCarro(Request $request){

        $dadosCarro = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required',
    
        ]);
    
        Carros::create($dadosCarro);
    
        return Redirect::route('home');
    
    
        }

        public function apagarCarro(Carros $registroCarro){
        
            //dd($registrosCaminhoes);
            $registroCarro->delete();
    
    
            return Redirect::route('editar-carro');
        }

        public function MostrarAlterarCarro(Carros $registroCarro){

            return view('alterarCarro', ['registroCarro' => $registroCarro]);
        }


        public function AlterarBancoCarro(Carros $registroCarro, Request $request){

            $banco = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
    
            ]);
    
            $registroCarro->fill($banco);
            $registroCarro->save();
    
            //dd($registrosCaminhoes);
    
            return Redirect::route('editar-carro');
    }

      

}