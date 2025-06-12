<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../funcoes.php';

class ExercicioDezTest extends TestCase
{
    public function testIntervaloCrescente()
    {
        $this->assertEquals("6 7 8 9", ExercicioDez(5, 10));
    }

    public function testIntervaloDecrescente()
    {
        $this->assertEquals("6 7 8 9", ExercicioDez(10, 5));
    }

    public function testNumerosIguais()
    {
        $this->assertEquals("Números iguáis, não possui intervalo.", ExercicioDez(7, 7));
    }

    public function testNumeroNegativo()
    {
        $this->assertEquals("-2 -1 0 1", ExercicioDez(-3, 2));
    }

    public function testEntradaNaoNumerica()
    {
        $this->assertEquals("Erro: Insira apenas valores numéricos!", ExercicioDez("abc", 5));
        $this->assertEquals("Erro: Insira apenas valores numéricos!", ExercicioDez(5, "xyz"));
    }
}