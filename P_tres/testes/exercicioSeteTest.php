<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../funcoes.php';

class ExercicioSeteTest extends TestCase
{
    public function testReajusteAbaixoDe300()
    {
        $resultado = ExercicioSete(200);
        $this->assertStringContainsString("Salário anterior: 200", $resultado);
        $this->assertStringContainsString("Salário atualizado: 300,00", $resultado);
    }

    public function testReajusteIgualA300()
    {
        $resultado = ExercicioSete(300);
        $this->assertStringContainsString("Salário anterior: 300", $resultado);
        $this->assertStringContainsString("Salário atualizado: 450,00", $resultado);
    }

    public function testReajusteAcimaDe300()
    {
        $resultado = ExercicioSete(500);
        $this->assertStringContainsString("Salário anterior: 500", $resultado);
        $this->assertStringContainsString("Salário atualizado: 650,00", $resultado);
    }

    public function testSalarioNegativo()
    {
        $resultado = ExercicioSete(-100);
        $this->assertEquals("Erro: Insira um valor válido!", $resultado);
    }

    public function testSalarioInvalido()
    {
        $resultado = ExercicioSete("abc");
        $this->assertEquals("Erro: Insira um valor válido!", $resultado);
    }
}