<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Banco\Banco;

class BancoTest extends TestCase
{
    public function testBancoExiste()
    {
        $this->assertInstanceOf(Banco::class, new Banco());
    }

    public function testSaqueSaldoPositivoSaquePositivo() : void
    {
        $banco = new Banco;
        $this->assertEquals(9, $banco->saque(10, 1));
    }

    public function testSaqueSaldoPositivoSaqueNegativo() : void
    {
        $banco = new Banco;
        $saldo = rand(1, 1000);
        $saque = rand(-1, -1000);
        $this->assertEquals($saldo, $banco->saque($saldo, $saque));
    }

    public function testSaqueMaiorQueSaldo()
    {
        $banco = new Banco;
        $saldo = 100;
        $saque = 150;
        $this->assertEquals("Operação não realizada. Saldo insuficiente.", $banco->saque($saldo, $saque));
    }
}