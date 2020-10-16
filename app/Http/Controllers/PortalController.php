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
        $equipa =[
            "Equipa 1",
            "Equipa 2",
            "Equipa 3"
        ];
        
        $equipa = $equipa[$request->chave];
        if($request->chave > 0 && $request->chave < count($equipa)){
            return view('equipas', ['equipa'=>$equipa]);
        }
        else{
            $erro = 'nao existe equipas';
            return view('erro', ['erro' => $erro]);
        }
        
    }
    
}
