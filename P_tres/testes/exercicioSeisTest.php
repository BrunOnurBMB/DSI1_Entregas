<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../funcoes.php';

class ExercicioSeisTest extends TestCase
{
    public function testClienteComum()
    {
        $this->assertEquals("Total da compra (cod-1 - Cliente Comum) = 100", ExercicioSeis(1, 100));
    }

    public function testFuncionarioComDesconto()
    {
        $this->assertEquals("Total da compra (cod-2 - Funcionário) = 90", ExercicioSeis(2, 100));
    }

    public function testClienteVipComDesconto()
    {
        $this->assertEquals("Total da compra (cod-3 - Cliente VIP) = 95", ExercicioSeis(3, 100));
    }

    public function testValorNegativo()
    {
        $this->assertEquals("Erro: Insira um número inteiro positivo!", ExercicioSeis(1, -50));
    }

    public function testEntradaNaoNumerica()
    {
        $this->assertEquals("Erro: Insira um número inteiro positivo!", ExercicioSeis(2, "abc"));
    }
}