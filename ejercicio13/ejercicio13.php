<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css" type="text/css">
    <title>Ejercicio 13</title>
</head>

<body>
    <?php  include("./includes/header.php"); ?>
    <form action="ordenar.php" method="post">
        <div class="menu_div">
            <div>
                <h2>Entrada</h2>
                <input class="checkbox" type="checkbox" id="entrada_ensalada" name="entradas[]" value="ensalada">
                <label class="item" for="entrada_ensalada">Ensalada</label><br>
                <input class="checkbox" type="checkbox" id="entrada_sopa" name="entradas[]" value="sopa">
                <label class="item" for="entrada_sopa">Sopa de verduras</label>
            </div>
            <img src="./assets/imagenes/ensalada.jpg" alt="imagen">
        </div>
        <div class="menu_div">
            <img src="./assets/imagenes/filete.jpg" alt="imagen">
            <div>
                <h2>Plato principal</h2>
                <input type="checkbox" id="plato_principal_filete" name="principal[]" value="filete">
                <label for="plato_principal_filete">Filete a la parrilla</label><br>
                <input type="checkbox" id="plato_principal_pollo" name="principal[]" value="pollo">
                <label for="plato_principal_pollo">Pollo al horno</label>
            </div>
        </div>
        <div class="menu_div">
            <div>
                <h2>Acompañamiento</h2>
                <input type="checkbox" id="acompanamiento_pure" name="acompañamiento[]" value="pure">
                <label for="acompanamiento_pure">Puré de papas</label><br>
                <input type="checkbox" id="acompanamiento_arroz" name="acompañamiento[]" value="arroz">
                <label for="acompanamiento_arroz">Arroz blanco</label>
            </div>
            <img src="./assets/imagenes/pure.jpg" alt="imagen">
        </div>

        <div class="menu_div menu_div_final">
            <img src="./assets/imagenes/tarta.jpg" alt="imagen">
            <div>
                <h2>Postre</h2>
                <input type="checkbox" id="postre_tarta" name="postre[]" value="tarta">
                <label for="postre_tarta">Tarta de frutas</label><br>
                <input type="checkbox" id="postre_helado" name="postre[]" value="helado">
                <label for="postre_helado">Helado de vainilla</label>
            </div>
        </div>
        <button class="boton" type="submit">Ordenar</button>
    </form>
    <?php  include("./includes/footer.php"); ?>
    
</body>

</html>