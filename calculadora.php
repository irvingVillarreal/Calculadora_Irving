====COD de calculadora.php====

<?php
class Calculadora{
    function sumar($num1, $num2){
        return $num1+$num2;
    }

    function restar($num1, $num2){
        return $num1-$num2;
    }

    function multiplicar($num1, $num2){
        return $num1*$num2;
    }

    function dividir($num1, $num2){
        if ($num2 == 0){
            throw new Exception("Divición por cero");
        }
        return $num1 / $num2;
    }

    function generarArreglo(){
        $arreglo = array();
        for($i=0;$i<5;$i++){
            $arreglo[$i] = rand (1,10);
        }
        return $arreglo;
    }

    function capturarEntradasPermutacion(){

    }

    function calcularPermutacion($n, $r){
        $numerador = $this->calcularFactorial($n);
        $denominador = $this->calcularFactorial($n - $r);
        return $numerador/$denominador;
    }

    function calcularFactorial($numero){

    }

    

}
