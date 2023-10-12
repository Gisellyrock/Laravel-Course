<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hello extends Controller
{
    //todo metodo de controller deve retornar uma view
    public function exibeNome(string $nome, string $sobrenome)
    {
        //Passando para a view o valor de nome
        //resource/views/hello.php
        return view('hello', [
            'nomePessoa' => $nome,
            'sobrenomePessoa' => $sobrenome
        ]);
    }
}
