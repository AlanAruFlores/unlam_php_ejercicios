<?php session_start(); ?>
<?php require_once("funciones.php") ?>
<?php require_once("cargar_objetos.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="./assets/style.css">
    <title>Dado's</title>
</head>
<body>

    <header id="cabecera">
        <h1><i class="fa-solid fa-dice"></i> Dado's</h1>
        <p>&#169;Alan Nahuel Aruquipa Flores</p>
    </header>
    <main id="contenido">
        <h2>Tire sus Dado's 🎲😎</h2>

        <!--Si no existe listaDados-->
        <?php if(!isset($_SESSION["listaDados"])):?>
            <form action = "calcular.php" method="post">
                <label>Numero de dados</label>
                <select name ="dados">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>      
                <br>
                <input type="submit" value="Tirar">
            </form>
        <?php endif;?>
        
        <?php if(isset($_SESSION["listaDados"])):?>
            <div id="contenedor_imagenes">
                <?php mostrarDados($dadosData); ?>  
            </div>
            <div id="resultado">
                La suma es: <?php echo obtenerValor($dadosData); ?>
            </div>
        <?php endif; ?>
    </main>
    <footer id="pie-pagina">
        <div>
            <img src="./assets/imagenes/unlam.png" alt="logo">
            <p>Universidad Nacional de la Matanza - Programacion Web II<p>
        </div>
    </footer>
</body>
</html>

<?php session_unset();?>