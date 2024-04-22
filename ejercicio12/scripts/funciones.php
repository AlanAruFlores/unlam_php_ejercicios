
<?php
    function contarVisitantes(){
        $json = json_decode(file_get_contents("./archivos/datos.json"),true);
        $contador = 0;
        foreach($json as $key => $value){
            if($value != "tierra")
                $contador++;
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }

        return $contador;
    }
?>