<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../funcoes.php';

class ExercicioTresTest extends TestCase
{
    public function testMediaAprovado()
    {
        $resultado = ExercicioTres([7, 7, 7]); // Média: 7.00
        $this->assertStringContainsString("Aprovado. Média final: 7.00", $resultado);
    }

    public function testMediaReprovado()
    {
        $resultado = ExercicioTres([4, 4, 4]); // Média: 4.00
        $this->assertStringContainsString("Reprovado!. Média final: 4.00", $resultado);
    }

    public function testNotasInvalidas()
    {
        $resultado = ExercicioTres(["abc", -2, 5]); // Entrada inválida
        $this->assertEquals("Erro: Insira um valor numérico positivo!", $resultado);
    }

    public function testEntradaComValoresDecimais()
    {
        $resultado = ExercicioTres([7.2, 6.8, 5.9]); // Média aproximada: 6.63
        $this->assertStringContainsString("Aprovado. Média final: 6.63", $resultado);
    }

    public function testArrayVazio()
    {
        $resultado = ExercicioTres([]); // Nenhuma nota fornecida
        $this->assertEquals("ERRO: É necessário inserir o valor das três provas.", $resultado);
    }
}