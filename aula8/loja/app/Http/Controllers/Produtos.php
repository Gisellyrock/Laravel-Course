<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produtos extends Controller
{
    //todo metodo de controller deve retornar uma view
    public function exibirProdutos()
    {
       //capturar do banco de dados
       return view('minhapagina');
    }
}
