<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="./assets/styles.css" type="text/css">
    <title>Ejercicio 2</title>
</head>
<body>

    <!--CARGO EL ENCABEZADO-->
    <?php include("./assets/includes/header.php"); ?>
    
    
    <main id="contenido">
        <h1>Ejercicio 2</h1>
        <h2>Codigo:</h2>
        <pre id="codigo">
            <?php 
                require_once("./mostrarArchivo.php");
                mostrarArchivo("./assets/codigos/ejercicio2.txt");
            ?>     
        </pre>
        <br>
        <h2>Resultado:</h2>
        <div id="resultado">
            <?php 
                require_once("../ejercicio2/ejercicio2.php");
            ?>
        </div>
    </main>

    <!--CARGO EL PIE DE PAGINA-->
    <?php include("./assets/includes/footer.php"); ?>
</body>
</html>