<?php

namespace App\Chave;

use App\Chave\Interfaces\ChaveInterface;

class Interruptor implements ChaveInterface{
    public function liga(){
        echo "ligado | ";
    }
    
    public function desliga(){
        echo "desligado | ";
    }

    public function giraParaDireita(){
        echo "apertar-2 | ";
    }
    
    public function giraParaEsquerda(){
        echo "soltar-2 | ";
    }
}