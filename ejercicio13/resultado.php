<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css" type="text/css">

    <title>Ejercicio 13</title>
</head>

<body>
    <?php include ("./includes/header.php"); ?>
    <main id="contenido">
            <h1>Solicitud del comensal</h1>
            <?php
            //Lectura del archivo
            $lectura_archivo = parse_ini_file("menu.ini");

            $lecturaEntradas = json_decode($lectura_archivo["entradas"]);
            $lecturaPrincipal = json_decode($lectura_archivo["principal"]);
            $lecturaAcompañamiento = json_decode($lectura_archivo["acompanamiento"]);
            $lecturaPostre = json_decode($lectura_archivo["postre"]);


            leerListas($lecturaEntradas, "Entradas", "entrada");
            leerListas($lecturaPrincipal, "Principales", "principal");
            leerListas($lecturaAcompañamiento, "Acompañamientos", "acompañamiento");
            leerListas($lecturaPostre, "Postres", "postre");


            function leerListas($array, $titulo, $tipo)
            {
                echo "<div>";
                echo "<h2>$titulo</h2>";
                if (is_array($array)) {
                    echo "<ul>";
                    foreach ($array as $value) {
                        echo "<li>$value</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<p>No se solicito ningun plato $tipo</p>";
                }
                echo "</div>";
            }
            ?>

            <a class="boton" href="./ejercicio13.php">Volver</a>
    </main>
    <?php include ("./includes/footer.php"); ?>
</body>

</html>