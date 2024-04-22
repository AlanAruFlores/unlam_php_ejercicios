<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css" type="text/css"/>
    <title>Ejercicio 12</title>
</head>
<body>
    <main id = "contenido">
        <form action="./scripts/procesar.php" method="post">
            <h1 class="titulo">Control Planetario</h1>
            <input type="text" placeholder="Visitante" name="visitante"/>
            <select id="planeta" name="planeta">
                <option value="tierra">Tierra</option>
                <option value="mercurio">Mercurio</option>
                <option value="venus">Venus</option>
                <option value="marte">Marte</option>
                <option value="jupiter">Júpiter</option>
                <option value="saturno">Saturno</option>
                <option value="urano">Urano</option>
                <option value="neptuno">Neptuno</option>
                <option value="pluton">Plutón</option>
            </select>
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>