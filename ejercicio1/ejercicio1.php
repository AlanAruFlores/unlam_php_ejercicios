<?php 
/*
    Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
    “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
    “avance” o “estado desconocido” ante un caso no esperado.
        a) función semaforo_a($color): Resuelva la solución utilizando if else
        b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )
        c) función semaforo_c($color): Resuelva la solución utilizando switch
 */

    echo semaforo_a("rojo")."<br>"; 
    echo semaforo_b("amarillo")."<br>";
    echo semaforo_c("verde")."<br>";

    function semaforo_a($color){
        $resultado = "";

        if($color ==="rojo")
            $resultado = "frene";
        else if($color === "amarillo")
            $resultado = "precaucion";
        else if($color ==="verde")
            $resultado = "avance";
        else
            $resultado = "Estado Desconocido";
        return $resultado;
    }   

    function semaforo_b($color){
        return  ($color ==="rojo") ? "frene" : 
                        (($color === "amarillo") ? "precaucion" :
                            (($color === "verde") ? "avance" : "Estado Desconocido")); 
    }

    function semaforo_c($color){
        $resultado = "";
        switch($color){
            case "rojo":     
                $resultado = "frene";
                break;
            case "amarillo":
                $resultado = "precaucion";
                break;
            case "verde":
                $resultado = "avance";
                break;
            default:
                $resultado = "Estado Desconocido";
        }
        return $resultado;
    }
?>