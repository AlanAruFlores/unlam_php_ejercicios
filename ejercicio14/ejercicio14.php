<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Ejercicio 14</title>
</head>

<body>
    <?php include("./includes/header.php"); ?>
    <main id="contenido">
        <h1>Ingrese dimension</h1>
        <form action="procesar_matriz.php" method="POST">
            <input type="number" name="dimension" />
            <input type="submit" value="Enviar" />
        </form>
    </main>
    <?php include("./includes/footer.php"); ?>
</body>

</html>