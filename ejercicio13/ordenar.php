<?php

    //Me aseguro que se vacie el archivo
    actualizarArchivoIni();

    //Obtengo los datos del post
    $entradas = $_POST["entradas"];
    $principal = $_POST["principal"];
    $acompañamiento = $_POST["acompañamiento"];
    $postre = $_POST["postre"];

    //Escribo en el archivo
    escribirEnElArchivoIni("menu.ini", $entradas, "entradas");
    escribirEnElArchivoIni("menu.ini", $principal, "principal");
    escribirEnElArchivoIni("menu.ini", $acompañamiento, "acompanamiento");
    escribirEnElArchivoIni("menu.ini", $postre, "postre");


    header("Location:resultado.php");

    //var_dump($entradas2);
    function escribirEnElArchivoIni($archivo,$array,$campo){
        $contenido = "$campo='".json_encode($array)."'\n";
        file_put_contents($archivo, $contenido, FILE_APPEND);
    }

    function actualizarArchivoIni(){
        $archivo = "menu.ini";
        file_put_contents($archivo, '');
    }
?>