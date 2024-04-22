<?php 
    if(isset($_POST["visitante"]) && isset($_POST["planeta"])) {
        $visitante = $_POST["visitante"];
        $planeta = $_POST["planeta"];


        //Ingreso la informacion en el JSON
        $archivo ="../archivos/datos.json";
        $json = json_decode(file_get_contents($archivo), true);
        $json[$visitante] = $planeta;
        file_put_contents($archivo, json_encode($json));
    
        header("Location:../verVisitantes.php");
    }

?>