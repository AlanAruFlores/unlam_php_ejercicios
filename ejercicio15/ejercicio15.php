
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Ejercicio 15</title>
</head>
<body>
    <?php include("./includes/header.php"); ?>
    <main id="contenido">
        <h1>Buscar Coincidencia</h1>
        <form action="procesar.php" method="POST">
            <textarea name="texto" placeholder="Texto"></textarea>
            <input type="text" name="clave" placeholder="Clave"></textarea>
            <input type="submit" value="Encontrar Coincidencias" />
        </form>
        <?php 
            if(isset($_SESSION["contador_coincidencias"])){
              echo "<p>Hubo ".$_SESSION["contador_coincidencias"]." coincidencias</p>";
            } 
            session_unset();
        ?>
    </main>
    <?php include("./includes/footer.php"); ?>
</body>
</html>