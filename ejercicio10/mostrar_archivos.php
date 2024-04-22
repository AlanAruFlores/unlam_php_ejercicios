<?php 
    function mostrarArchivos(){
        if(!is_dir("imagenes"))
            return;
        
        $carpeta=opendir("imagenes");
        $a="";

        $ruta = "./imagenes";
        while(($archivo = readdir($carpeta))){
            if($archivo == "." || $archivo == "..")
                continue;
            $a = <<<html
                <a class="link_archivo" href="./ver_imagen.php?url_imagen=$ruta/$archivo&nombre=$archivo">$archivo</a><br>
            html;
            echo $a;
        }    
    }

?>