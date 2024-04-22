<?php
    require_once("saludar.php");

    $saludoObjeto = new Saludar("Alan","Aruquipa");

    $horario = 8;
    //define("HORARIO", 24);
    echo $saludoObjeto->saludarFormal($horario);
    echo "<br>";
    echo $saludoObjeto->saludarInformal($horario);
?>