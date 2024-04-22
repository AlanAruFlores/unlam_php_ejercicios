<!--Si existe los dados ya calculado-->
<?php 

    function mostrarDados($dadosData){
        $listaDados = json_decode($_SESSION["listaDados"]);   
        foreach($listaDados as $value)
            echo "<img class='img-dados' src=".$dadosData[$value]->getImagen()." alt='dado'/>";
    }

    function obtenerValor($dadosData){
        $listaDados = json_decode($_SESSION["listaDados"]);
        $valor = 0;
        foreach($listaDados as $value)
            $valor += $dadosData[$value]->getValor();
        return $valor;
    }
?> 