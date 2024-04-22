<?php
    session_start();
    require_once("funciones.php");

    $matriz = json_decode($_SESSION["matriz"]);
    $dimension = $_SESSION["dimension"];

    //var_dump( $matriz );
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">

    <title>Ejercicio 14</title>
</head>

<body>
    <?php include ("./includes/header.php"); ?>
    <main id="contenido">
        <h1>Matriz generada</h1>
        <table>
            <?php 
                for( $i = 0; $i < $dimension; $i++ ){
                    echo "<tr>";
                    for ($j=0; $j < $dimension; $j++) 
                        echo "<td>".$matriz[$i][$j]."</td>";  
                    echo "</tr>";
                }
            ?>
        </table>

        <p>Diagonal Principal: <?php echo implode(",",obtenerDiagonalPrincipal($matriz,$dimension)); ?></p>
        <p>Diagonal Secundaria: <?php echo implode(",",obtenerDiagonalSecundaria($matriz,$dimension)); ?></p>
        <p>Sumatoria: <?php echo obtenerSumatoriaMatriz($matriz,$dimension); ?></p>

    </main>
    <?php include ("./includes/footer.php"); ?>
</body>

</html>