
<?php 
    $error = "no error";
    if(empty($_POST["nombre"]) || !isset($_FILES["archivo"])){
        $error="Nombre o archivo vacios";
        header("Location:ejercicio10.php?error=$error");
        return;
    }
    
    $archivo = $_FILES["archivo"];   
    $tipoArchivo = $archivo["type"];

    if($tipoArchivo != "image/jpg" && $tipoArchivo != "image/png" && $tipoArchivo != "image/jpeg")
    {
        $error="Formato no valido";
        header("Location:ejercicio10.php?error=$error");
        return;
    }

    $nombreArchivo = obtenerNombreArchivoConTipo($_POST["nombre"], $tipoArchivo);

    move_uploaded_file($archivo["tmp_name"], "./imagenes/$nombreArchivo");
    header("Location:ejercicio10.php");

    /*FUNCIONES*/
    function obtenerNombreArchivoConTipo($nombreArchivo,$tipo){
        $formato = "";
        switch ($tipo) {
            case 'image/png':
                $formato = '.png';
                break;
            case 'image/jpg':
                $formato = '.jpg';
                break;
            default:
                $formato = '.jpeg'; 
        }      

        return $nombreArchivo.''.$formato;
    }
?>