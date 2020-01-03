<?php

abstract class Chave{
    protected $ponta;
    public $tamanhoHaste = 0;
    public $espessuraHaste = 0;
    public $cabo;
    public $modelo;
    public $nome;
    public $medidas;

    public function __construct(){
        
    }
//
    //to do - resolver problema de inicialização
    public function conversor(){
        if ($this->medidas == 'pol'){
            $this->espessuraHaste *= 25.4;
            $this->tamanhoHaste *= 25.4;
        }
    }
}

class Parafuso{
    public $comprimento;
    public $espessura;
    public $cabeca;
    public $ponta;
    public $tipo;
}



class ChaveEstrela extends Chave{
    protected $ponta = '*';
}

$chave1 = new ChaveFenda();
$chave1->medidas = 'pol';
$chave1->nome = 'Tramontina';
$chave1->modelo = 'Vanadium';
$chave1->cabo = 'Laranja';
$chave1->espessuraHaste = 0.1;
$chave1->tamanhoHaste = 0.5;
$chave1->conversor();

$chave2 = new ChaveFenda();
//$chave2->medidas = 'pol';
$chave2->nome = 'Tramontina';
$chave2->modelo = 'Vanadium';
$chave2->cabo = 'Laranja';
$chave2->espessuraHaste = 0.2;
$chave2->tamanhoHaste = 0.5;
$chave2->conversor();

$chave3 = new ChaveEstrela;
$chave3->nome = 'Tramontina';
$chave3->modelo = 'Vanadium';
$chave3->cabo = 'Laranja';
$chave3->espessuraHaste = 0.2;
$chave3->tamanhoHaste = 0.6;
$chave3->conversor();


print_r($chave1);
print_r($chave2);
print_r($chave3);

?>