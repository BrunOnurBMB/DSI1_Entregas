<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../funcoes.php';

class ExercicioUmTest extends TestCase
{
    public function testNumeroPositivo()
    {
        $this->assertEquals("É Positivo", ExercicioUm(42));
    }

    public function testNumeroNegativo()
    {
        $this->assertEquals("É Negativo", ExercicioUm(-7));
    }

    public function testNumeroZero()
    {
        $this->assertEquals("Igual a 0", ExercicioUm(0));
    }

    public function testValorNaoNumerico()
    {
        $this->assertEquals("Erro: Insira um número inteiro!", ExercicioUm("abc"));
    }

    public function testValorNulo()
    {
        $this->assertEquals("Erro: Insira um número inteiro!", ExercicioUm(null));
    }
}
