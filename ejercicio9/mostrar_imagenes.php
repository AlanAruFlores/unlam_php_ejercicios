<?php 
    function mostrarImagenes(){
        if(!is_dir("imagenes"))
            return;
        
        $carpeta=opendir("imagenes");
        $div="";
        while(($archivo = readdir($carpeta))){
            if($archivo == "." || $archivo == "..")
                continue;
            $div = <<<html
                <div class="publicacion">
                    <img src="./imagenes/$archivo" alt="publicacion">
                    <p>$archivo</p>
                </div>
            html;
            echo $div;
        }    
    }

?>