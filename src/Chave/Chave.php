<?php

namespace App\Chave;

use App\Chave\Interfaces\ChaveInterface;

class Chave implements ChaveInterface
{
    protected $ponta;
    public $tamanhoHaste = 0;
    public $espessuraHaste = 0;
    public $cabo;
    public $modelo;
    public $nome;

    public function giraParaDireita() : string
    {
        return "apertar";
    }
    
    public function giraParaEsquerda() : string
    {
        return "soltar";
    }

    public function getPonta() : string
    {
        return is_null($this->ponta) ? "." : $this->ponta;
    }
}