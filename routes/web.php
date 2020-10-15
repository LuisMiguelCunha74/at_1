<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/toni', function () {
    return view('welcome');
});

Route::get('/bem-vindo', function() {
    echo ('ola');
});

Route::get('/', function(){
    echo('<h1>OLA<h1>');
});

Route::get('/bem-vindo/aedah', function(){
    echo('<h1>esta é só para o Agrupamento<h1>');
});

Route::get('/nome/{nome}',function($nome){
   echo('<h1>OLA '.$nome.'<h1>'); 
});

Route::get('/nome/{nome}/{apelido}', function ($nome, $apelido){
    echo('<h1>ola '.$nome.''.$apelido.'<h1>');
});

Route::get('/nomes/{nome}/{numero}', function($nome,$numero){
    $numero=is_numeric($numero)?$numero:5;
  for($i=1;$i<=$numero;$i++){
      echo($nome.'<br>');
  }
});

Route::get('/ola', function(){
    return view('bemvindo');
});

Route::get('/nomee/{name}/{apelido}', function($nome=null, $apelido=null){
    return view('mostranome', [
        'nome'=>$nome,
        'apelido'=>$apelido
    ]);
});

Route::get('/tarefass', function(){
    $tarefas=[
        'comprar senha',
        'imprimir fotocopias',
        'carregar cartao'
    ];
    return view ('tarefas',[
        'tarefas'=>$tarefas
    ]);
});

Route::get('/entrada', 'App\Http\Controllers\PortalController@index');

Route::get('/equipas', 'App\Http\Controllers\PortalController@listarEquipas');