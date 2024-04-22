<?php 
    if(!isset($_POST["dimension"]) || intval($_POST["dimension"]) < 1){
        $_SESSION["error"] = "La matriz debe tener una dimension positiva";
        header("Location:ejercicio14.php");
        return ;
    }
    session_start();

    $n=intval($_POST["dimension"]);
    $matriz = crearMatriz($n);


    $_SESSION["matriz"] = json_encode($matriz);
    $_SESSION["dimension"] = $n;

    /*
    echo implode(",",obtenerDiagonalPrincipal($matriz,$n));
    echo "<br>";
    echo implode(",",obtenerDiagonalSecundaria($matriz,$n));
    echo "<br>";
    echo "Sumatoria: ".obtenerSumatoriaMatriz($matriz,$n);
    echo "<br>";
    */

    header("Location:resultado.php");

    //Creo la Matriz
    function crearMatriz($n){
        $matriz = [];

        for( $i= 0; $i < $n; $i++ ){
            $aux = [];
            for( $j= 0; $j < $n; $j++ ){
                $aux[$j] = rand(0,9);
            }
            $matriz[$i] = $aux;
        }

        return $matriz;
    }
?>