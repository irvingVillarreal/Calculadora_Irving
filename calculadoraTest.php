====COD de calculadoraTest.php====

<?php

require_once(__DIR__.'/Calculadora.php');

use \PHPUnit\Framework\TestCase;
class CalculadoraTest extends TestCase{

    public function testSumar(){
        $calculadora = new Calculadora();
	$resultado_calculado = $calculadora->sumar(3,3);
        $this->assertEquals(6, $resultado_calculado);
    }
}