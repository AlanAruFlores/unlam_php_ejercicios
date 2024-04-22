<?php 
    /*
    Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
    valores.
    a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for
    b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each
    c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while    
    */

    $array = array(1,2,3,4,5);
    $resultado1 = sumatoria_a($array);
    $resultado2 = sumatoria_b($array);
    $resultado3 = sumatoria_c($array);
    
    echo $resultado1."<br>".$resultado2."<br>".$resultado3;

    function sumatoria_a($array){
        if(empty($array)) return "Error: No puede estar vacia";
        if(!is_array($array)) return "Error: No es un arreglo";

        $sumatoria = 0;
        for($i = 0; $i<count($array) ; $i++){
            $sumatoria += $array[$i];
        }

        return $sumatoria;
    }

    function sumatoria_b($array){
        if(empty($array)) return "Error: No puede estar vacia";
        if(!is_array($array)) return "Error: No es un arreglo";

        $sumatoria = 0;
        foreach ($array as $elemento) {
            $sumatoria += $elemento;
        }      
        return $sumatoria;
    }

    function sumatoria_c($array){
        if(empty($array)) return "Error: No puede estar vacia";
        if(!is_array($array)) return "Error: No es un arreglo";

        $sumatoria = 0;
        $i = 0;
        while($i<count($array)){
            $sumatoria += $array[$i];
            $i++;
        }
        return $sumatoria;
    }
?>