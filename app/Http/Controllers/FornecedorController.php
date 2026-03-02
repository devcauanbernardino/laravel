<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => ''
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
            ],
        ];

        //condicao ? se for verdade : se for falso
        //condicao ? se for verdade : (condicao ? se for verdade : se for falso)
        // $msg = isset($fornecedores[0]['cnpj']) ? $fornecedores[0]['cnpj'] : 'CNPJ não informado';
        // echo $msg;
        
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
