<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2) {
        //echo "A soma de $p1 + $p2 é: " . ($p1 + $p2);

        //Encaminhando parametros do controlador para a view
        //---------------------------------------------------------------------------------

        //Utilizando array associativo
        //return view('site.teste', ['p1' => $p1, 'p2' => $p2]);

        //---------------------------------------------------------------------------------

        //Metodo compact
        //return view('site.teste', compact('p1', 'p2'));

        //---------------------------------------------------------------------------------

        //Metodo with
        return view('site.teste')->with('p1', $p1)->with('p2', $p2);

        //---------------------------------------------------------------------------------

    }
}
