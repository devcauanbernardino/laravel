<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;


Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos']);

Route::get('/contato', [ContatoController::class, 'contato']);

//nome, categoria, assunto, mensagem

Route::get('/contato/{nome}/{categoria_id}'
,function(string $nome = 'Desconhecido', int $categoria_id = 1){
    echo "Estamos aqui: $nome - $categoria_id";
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

// Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem?}',function(string $nome, string $categoria, string $assunto, string $mensagem = 'mensagem nao informada') {
//     echo "Estamos aqui $nome - $categoria - $assunto - $mensagem";
// });

// Route::get('/sobre-nos', function () {
//     return 'Sobre-nos';
// });

// Route::get('/contato', function () {
//     return 'Contato';
// });

/* verbo http

get
post
put
patch
delete
options

*/
