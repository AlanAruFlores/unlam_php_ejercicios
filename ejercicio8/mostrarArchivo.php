
<?php 

    /*Muestro el contenido del archivo dado */
    function mostrarArchivo($rutaArchivo){
        if(!file_exists($rutaArchivo))
           return;

        //Abro el archivo
        $archivo = fopen($rutaArchivo,"r");

        //Voy leyendo linea x linea
        while(!feof($archivo)){
            echo htmlspecialchars(fgets($archivo));
        }
        fclose($archivo);
    }
?>