<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../funcoes.php';

class ExercicioCincoTest extends TestCase
{
    public function testSoma()
    {
        $this->assertEquals("5 + 3 = 8", ExercicioCinco(5, 3, "+"));
    }

    public function testSubtracao()
    {
        $this->assertEquals("10 - 4 = 6", ExercicioCinco(10, 4, "-"));
    }

    public function testMultiplicacao()
    {
        $this->assertEquals("6 * 2 = 12", ExercicioCinco(6, 2, "*"));
    }

    public function testDivisao()
    {
        $this->assertEquals("15 / 3 = 5", ExercicioCinco(15, 3, "/"));
    }

    public function testDivisaoPorZero()
    {
        $this->assertEquals("Erro: Divisão por zero não é possivel.", ExercicioCinco(7, 0, "/"));
    }

    public function testEntradaInvalida()
    {
        $this->assertEquals("Erro: Insira um valor numérico!", ExercicioCinco("abc", 5, "+"));
        $this->assertEquals("Erro: Insira um valor numérico!", ExercicioCinco(10, "xyz", "-"));
    }
}