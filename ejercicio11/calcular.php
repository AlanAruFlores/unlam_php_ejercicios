<?php 
    session_start();

    if(!isset($_POST["dados"])){
        echo "<h1>Error: debe verificar el ingreso de dados</h1><br>";
        return ;
    }
    $numeroDados = intval($_POST["dados"]);
    $listaDados = array();
    for($i= 0;$i<$numeroDados;$i++){
        $numeroRandom = rand(0,5);
        $listaDados[$i] = $numeroRandom;

    }
    $_SESSION["listaDados"] = json_encode($listaDados);
    header("Location:ejercicio11.php");
?>