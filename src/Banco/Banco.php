<?php

namespace App\Banco;

class Banco
{
    public function saque($saldo, $debito)
    {
        if ($debito < 0){
            return $saldo;
        }
        if ($debito > $saldo){
            return "Operação não realizada. Saldo insuficiente.";
        }
        return ($saldo - $debito);
    }
}