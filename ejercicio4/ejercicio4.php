<?php  
    /*
    Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
    la función, el valor del parámetro haya sido incrementado en 1
    */  

    $numero = 0;
    echo "Valor anterior: $numero <br>";
    incrementar($numero);
    echo "Valor actual: $numero <br>";
    function incrementar(&$n){
        $n++;
    }
?>