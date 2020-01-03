<?php

namespace App\Parafuso;

use App\Chave\Interfaces\ChaveInterface;

class Parafuso implements ParafusoInterface
{
    protected $action;

    // O parafuso não depende especificamente da chave para ser apertado
    public function __construct(ChaveInterface $action) {
        $this->action = $action;
    }

    public function queroSerApertado()
    {
        $this->action->giraParaDireita();
    }

    public function queroSerSolto()
    {
        $this->action->giraParaEsquerda();
    }
}
