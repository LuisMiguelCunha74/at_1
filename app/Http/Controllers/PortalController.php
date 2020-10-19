<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    public function index(){
        return view('entrada');
    }
    
    public function listarEquipas(){
        $equipas =[
            "Equipa 1",
            "Equipa 2",
            "Equipa 3"
        ];
        return view('equipas', ['equipas'=>$equipas]);
        
    }
    public function listarEquipa(Request $request){
        $numero = $request -> chave;
        $batata = $request -> chave;
        $equipas =[
            "Equipa 1",
            "Equipa 2",
            "Equipa 3",
            "equipa 4"
        ];

       $numero = is_numeric($numero) ? $numero:3;
        if($batata >= 0 && $batata < count($equipas)){
            $equipa = $equipas[$numero];
            return view('equipas', ['equipa'=>$equipa]);
        }
        else{
            $erro = 'nao existe equipas';
            return view('erro', ['erro' => $erro]);
        }
        
    }
    
}
