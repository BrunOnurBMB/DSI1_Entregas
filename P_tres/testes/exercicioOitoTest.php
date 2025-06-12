<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../funcoes.php';

class ExercicioOitoTest extends TestCase
{
    public function testContagemPositiva()
    {
        $this->assertEquals("0 1 2 3 4 5", ExercicioOito(5));
    }

    public function testContagemNegativa()
    {
        $this->assertEquals("0 -1 -2 -3", ExercicioOito(-3));
    }

    public function testZero()
    {
        $this->assertEquals("0", ExercicioOito(0));
    }

    public function testEntradaDecimal()
    {
        $this->assertEquals("Erro: Insira um número inteiro positivo!", ExercicioOito(2.5));
    }

    public function testEntradaInvalida()
    {
        $this->assertEquals("Erro: Insira um número inteiro positivo!", ExercicioOito("abc"));
    }
}