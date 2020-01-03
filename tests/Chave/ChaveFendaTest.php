<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Chave\Chave;
use App\Chave\Fenda\ChaveFenda;

class ChaveFendaTest extends TestCase
{
    public function testChaveAtributoPontaFenda()
    {
        $chave = new ChaveFenda;
        $this->assertEquals("-", $chave->getPonta());
        
    }
}