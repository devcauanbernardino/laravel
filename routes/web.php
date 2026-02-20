<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;


Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos']);

Route::get('/contato', [ContatoController::class, 'contato']);

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
