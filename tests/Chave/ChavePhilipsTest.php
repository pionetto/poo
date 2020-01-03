<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Chave\Chave;
use App\Chave\Philips\ChavePhilips;

class ChavePhilipsTest extends TestCase
{
    public function testChaveAtributoPontaPhilips()
    {
        $chave = new ChavePhilips;
        $this->assertEquals("+", $chave->getPonta());
    }

    public function testPontaRetornaString()
    {
        $chave = new ChavePhilips;
        $this->assertIsString($chave->getPonta());
    }

    public function testPhilipsTamanhoHaste()
    {
        $small = new ChavePhilips();
        $small->tamanhoHaste = 5;
        $this->assertEquals(5, $small->tamanhoHaste);
    }

    public function testPhilipsTamanhoHasteRetornaInteiro()
    {
        $small = new ChavePhilips();
        $small->tamanhoHaste = 5;
        $this->assertIsInt($small->tamanhoHaste);
    }

    public function testPhilipsSemTamanhoHaste()
    {
        $small = new ChavePhilips();
        $this->assertEquals(0, $small->tamanhoHaste);
    }

    public function testPhilipsEspessuraHaste()
    {
        $small = new ChavePhilips();
        $small->espessuraHaste = 3;
        $this->assertEquals(3, $small->espessuraHaste);
    }

    public function testPhilipsEspessuraHasteRetornaInteiro()
    {
        $small = new ChavePhilips();
        $small->espessuraHaste = 3;
        $this->assertIsInt($small->espessuraHaste);
    }

    public function testPhilipsSemEspessuraHaste()
    {
        $small = new ChavePhilips();
        $this->assertEquals(0, $small->espessuraHaste);
    }

    public function testPhilipsCabo()
    {
        $small = new ChavePhilips();
        $small->cabo = 'Plastico';
        $this->assertEquals("Plastico", $small->cabo);
    }

    public function testPhilipsCaboRetornaString()
    {
        $small = new ChavePhilips();
        $small->cabo = 'Plastico';
        $this->assertIsString($small->cabo);
    }

    public function testPhilipsModelo()
    {
        $small = new ChavePhilips();
        $small->modelo = 'Small';
        $this->assertEquals("Small", $small->modelo);        
    }
    
    public function testPhilipsModeloRetornaString()
    {
        $small = new ChavePhilips();
        $small->modelo = 'Small';
        $this->assertIsString($small->modelo);        
    }

    public function testPhilipsNome()
    {
        $small = new ChavePhilips();
        $small->nome = 'Phs 1';
        $this->assertEquals("Phs 1", $small->nome);
    }

    public function testPhilipsNomeRetornaString()
    {
        $small = new ChavePhilips();
        $small->nome = 'Phs 1';
        $this->assertIsString($small->nome);
    }
}