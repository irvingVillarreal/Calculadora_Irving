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

    public function sumarProveedor(){   
        return[
            'Caso 1' => [-1, -1, -2],
            'Caso 2' => [0, 0, 0],
            'Caso 3' => [0, -1, -1],
            'Caso 4' => [-1, 0, -1]
            ];
    }

}


 

 
