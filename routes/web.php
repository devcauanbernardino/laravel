<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;


Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::get('/login', function () { return 'Login';})->name('site.login');




//Agrupando rotas
Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');

    Route::get('/fornecedores', function () {
        return 'Fornecedores';
    })->name('app.fornecedores');

    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});



//nome, categoria, assunto, mensagem

// Route::get('/contato/{nome}/{categoria_id}'
// ,function(string $nome = 'Desconhecido', int $categoria_id = 1){
//     echo "Estamos aqui: $nome - $categoria_id";
// })->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

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
