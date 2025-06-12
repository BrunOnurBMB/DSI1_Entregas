<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../funcoes.php';

class ExercicioDoisTest extends TestCase {
    public function testNumerosEmOrdem(){
        $this->assertEquals("3 7", ExercicioDois(3,7));
    }

    public function testNumerosInvertidos(){
        $this->assertEquals("4 9", ExercicioDois(9, 4));
    }

    public function testNumerosIguais(){
        $this->assertEquals("5 5", ExercicioDois(5,5));
    }

    public function testValoresNegativos(){
        $this->assertEquals("-8 -2", ExercicioDois(-8,-2));
    }

    public function testComNumerosDecimais(){
        $this->assertEquals("2.5 3.1", ExercicioDois(2.5, 3.1));
    }

    public function testValorNaoNumericoA(){
        $this->assertEquals("Erro: Insira algum valor numérico para comparação", ExercicioDois(null, 10));
    }

    public function testValorNaoNumericoB(){
        $this->assertEquals("Erro: Insira algum valor numérico para comparação", ExercicioDois(10, null));
    }
}