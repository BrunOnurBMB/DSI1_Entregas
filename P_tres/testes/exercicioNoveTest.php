<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../funcoes.php';

class ExercicioNoveTest extends TestCase
{
    public function testFatorialDeSete()
    {
        $resultado = ExercicioNove(7);
        // Verifica se a string começa corretamente
        $this->assertStringContainsString("O fatorial do número 7! é: 7 * 6 * 5 * 4 * 3 * 2 * 1 <br>", $resultado);

        // Verifica se o resultado está correto
        $this->assertStringContainsString("Resultado = 5040", $resultado);
    }

    public function testFatorialDeZero()
    {
        $resultado = ExercicioNove(0);
        $this->assertEquals("O fatorial do número 0! é: 0 <br> Resultado = 1", $resultado);
    }

    public function testFatorialDeUm()
    {
        $resultado = ExercicioNove(1);
        $this->assertEquals("O fatorial do número 1! é: 1 <br> Resultado = 1", $resultado);
    }

    public function testEntradaDecimal()
    {
        $resultado = ExercicioNove(5.5);
        $this->assertEquals("Erro: Insira um número inteiro positivo!", $resultado);
    }

    public function testEntradaNegativa()
    {
        $resultado = ExercicioNove(-3);
        $this->assertEquals("Erro: Insira um número inteiro positivo!", $resultado);
    }

    public function testEntradaTexto()
    {
        $resultado = ExercicioNove("banana");
        $this->assertEquals("Erro: Insira um número inteiro positivo!", $resultado);
    }
}