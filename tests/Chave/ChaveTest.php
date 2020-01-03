<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Chave\Chave;
use App\Chave\Interfaces\ChaveInterface;

class ChaveTest extends TestCase{
    public function testChaveInstanceOfChaveTest()
    {
        $this->assertInstanceOf(ChaveInterface::class, new Chave);
    }

    public function testGiraDireitaParaApertar()
    {
        $chave = new Chave; 
        $this->assertEquals("apertar", $chave->giraParaDireita());
    }

    public function testGiraEsquerdaParaSoltar()
    {
        $chave = new Chave;
        $this->assertEquals("soltar", $chave->giraParaEsquerda());
    }
    
    public function testGiraParaDireitaRetornaString()
    {
        $chave = new Chave;
        $this->assertIsString($chave->giraParaDireita());
    }

    public function testGiraParaEsquerdaRetornaString()
    {
        $chave = new Chave;
        $this->assertIsString($chave->giraParaEsquerda());
    }

    public function testPontaRetornaString()
    {
        $chave = new Chave;
        $this->assertIsString($chave->getPonta());
    }
}