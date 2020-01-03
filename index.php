<?php

include('vendor/autoload.php');

use App\Chave\Philips\ChavePhilips;

$small1 = new ChavePhilips();
$small1->tamanhoHaste = 5;
$small1->espessuraHaste = 3;
$small1->cabo = 'Plastico';
$small1->modelo = 'Small';
$small1->nome = 'Phs 1';

$small2 = new ChavePhilips();
$small2->tamanhoHaste = 10;
$small2->espessuraHaste = 3;
$small2->cabo = 'Plastico';
$small2->modelo = 'Small';
$small2->nome = 'Phs 2';

$small3 = new ChavePhilips();
$small3->tamanhoHaste = 15;
$small3->espessuraHaste = 3;
$small3->cabo = 'Plastico';
$small3->modelo = 'Small';
$small3->nome = 'Phs 3';

$small4 = new ChavePhilips();
$small4->tamanhoHaste = 20;
$small4->espessuraHaste = 3;
$small4->cabo = 'Plastico';
$small4->modelo = 'Small';
$small4->nome = 'Phs 4';

print_r($small1);
print_r($small2);
print_r($small3);
print_r($small4);