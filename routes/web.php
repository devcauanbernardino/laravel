<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;


Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::get('/login', function() { return 'Login';})->name('site.login');





//----------------------------------------------------------------------------------------

//Parametros da rota para o controlador

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');

//----------------------------------------------------------------------------------------

//Rota de contigencia (fallback)

Route::fallback(function(){
    echo 'A rota acessada nao existe. <a href="' . route('site.index') . '">Clique aqui</a> para ir para a pagina inicial';
});

//----------------------------------------------------------------------------------------

//Redirecionamento de rotas

Route::get('/rota1', function() {
    echo 'Rota 1';
})->name('site.rota1');

Route::get('/rota2', function() {
    return redirect()->route('site.rota1');
})->name('site.rota2');

//Route::redirect('/rota2', '/rota1');

//----------------------------------------------------------------------------------------

//Agrupando rotas
Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');

    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');

    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});

//----------------------------------------------------------------------------------------

//Parametros nas rotas
//nome, categoria, assunto, mensagem

Route::get('/contato/{nome}/{categoria_id}'
,function(string $nome = 'Desconhecido', int $categoria_id = 1){
    echo "Estamos aqui: $nome - $categoria_id";
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem?}',function(string $nome, string $categoria, string $assunto, string $mensagem = 'mensagem nao informada') {
    echo "Estamos aqui $nome - $categoria - $assunto - $mensagem";
});

//----------------------------------------------------------------------------------------

/* verbo http

get
post
put
patch
delete
options

*/
