<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../funcoes.php';

class ExercicioQuatroTest extends TestCase
{
    public function testMesValido()
    {
        $this->assertEquals("O Mês referente ao número 3 é <br> Março", ExercicioQuatro(3));
        $this->assertEquals("O Mês referente ao número 12 é <br> Dezembro", ExercicioQuatro(12));
    }

    public function testMesInvalidoAbaixoDoLimite()
    {
        $this->assertEquals("Valor inválido! Digite um valor entre 1 e 12.", ExercicioQuatro(0));
        $this->assertEquals("Valor inválido! Digite um valor entre 1 e 12.", ExercicioQuatro(-5));
    }

    public function testMesInvalidoAcimaDoLimite()
    {
        $this->assertEquals("Valor inválido! Digite um valor entre 1 e 12.", ExercicioQuatro(13));
        $this->assertEquals("Valor inválido! Digite um valor entre 1 e 12.", ExercicioQuatro(100));
    }

    public function testEntradaNaoNumerica()
    {
        $this->assertEquals("Valor inválido! Digite um valor entre 1 e 12.", ExercicioQuatro("abc"));
        $this->assertEquals("Valor inválido! Digite um valor entre 1 e 12.", ExercicioQuatro(null));
    }
}