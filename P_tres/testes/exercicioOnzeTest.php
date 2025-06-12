<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../funcoes.php';

class ExercicioOnzeTest extends TestCase
{
    public function testStringNormal()
    {
        $resultado = ExercicioOnze("Bruno");
        $this->assertStringContainsString("Total de caracteres = 5", $resultado);
        $this->assertStringContainsString("Imprime: 0 1 2 3 4", $resultado);
    }

    public function testStringVazia()
    {
        $resultado = ExercicioOnze("");
        $this->assertEquals("Total de caracteres = 0 <br>Imprime:", $resultado);
    }

    public function testNumerosNaString()
    {
        $resultado = ExercicioOnze("1234");
        $this->assertStringContainsString("Total de caracteres = 4", $resultado);
        $this->assertStringContainsString("Imprime: 0 1 2 3", $resultado);
    }

    public function testCaracteresEspeciais()
    {
        $resultado = ExercicioOnze("@#_!$");
        $this->assertStringContainsString("Total de caracteres = 5", $resultado);
        $this->assertStringContainsString("Imprime: 0 1 2 3 4", $resultado);
    }

    public function testEspacosNaString()
    {
        $resultado = ExercicioOnze("Bruno S. M. Bifano");
        $this->assertStringContainsString("Total de caracteres = 18", $resultado);
        $this->assertStringContainsString("Imprime: 0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17", $resultado);
    }
}