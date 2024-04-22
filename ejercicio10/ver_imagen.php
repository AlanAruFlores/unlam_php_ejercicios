<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles.css"/>
    <title>Instragramo</title>
</head>
<body>
    <header id="cabecera">
        <h1>Instragramo</h1>
        <p>Hecho por Alan Nahuel Aruquipa Flores</p>
    </header>    
    
    <main>
        <div class="publicacion"> 
            <img src='<?php echo $_GET["url_imagen"]?>' alt="publicacion">
            <p><?php echo $_GET["nombre"]?></p>
        </div>
    </main>

    <div class="formulario">
        <h2>Publicar Estado</h2>
        <hr>
        <form action="procesar.php" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Nombre" name="nombre" required>
            <label class="cargar">
                <input type="file" placeholder="Seleccionar imagen" name ="archivo"required> Cargar            
            </label>
            <input type="submit" value="Publicar">
            <?php if(isset($_GET["error"]) && !empty($_GET["error"])):?>
                <strong style="color:red"><?=$_GET["error"]?></strong>
            <?php endif; ?>
        </form>    
    </div>
</body>
</html>