<?php require_once ("./scripts/funciones.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css" type="text/css" />
    <title>Ejercicio 12</title>
</head>

<body>
    <main id="contenido">
        <table id="tabla">
            <thead>
                <tr class="cabecera">
                    <th>Visitante</th>
                    <th>Planeta</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $contador = contarVisitantes();
                ?>
            </tbody>
            
        </table>
        <div id="cantidad">
                Visitantes no planetarios: <span><?php echo $contador?></span>
        </div>
    </main>

</body>

</html>