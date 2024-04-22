<?php 
    session_start();
    $clave = strtolower($_POST["clave"]);
    $texto = strtolower($_POST["texto"]);
 
    $contador = buscar($clave, $texto);
    $_SESSION["contador_coincidencias"] = $contador;
    header("Location:ejercicio15.php");
    function buscar($clave, $texto){
        $contador = 0;
        for( $i = 0; $i < strlen($texto); $i++ ){
            $coincidencia = true;
            for ($j=0; $j < strlen($clave); $j++) { 
                if($texto[$i+$j] != $clave[$j]){
                    $coincidencia = false;
                    break;
                }
            }

            if($coincidencia)
                $contador++;
        }
        return $contador;
    }

?>