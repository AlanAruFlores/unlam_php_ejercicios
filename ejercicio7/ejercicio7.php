<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="./assets/styles.css" type="text/css">
    <title>Ejercicio 7</title>
</head>
<body>
    <header id="cabecera">
        <h1>Alan Nahuel Aruquipa Flores</h1>
        <nav id="menu">
            <ul>
                <li><a href="#ejercicio1">Ejercicio 1</a></li>
                <li><a href="#ejercicio2">Ejercicio 2</a></li>
                <li><a href="#ejercicio3">Ejercicio 3</a></li>
                <li><a href="#ejercicio4">Ejercicio 4</a></li>
                <li><a href="#ejercicio5">Ejercicio 5</a></li>
                <li><a href="#ejercicio6">Ejercicio 6</a></li>
            </ul>
        </nav>
    </header>
    <main id="contenido">
        <article id ="ejercicio1">
            <h3>Ejercicio 1</h3>
            <p>
                Ejecuto el ejercicio 1, mandando como argumento a cada funcion lo siguiente:
                <br>
                <code>
                    semaforo_a("rojo"); <br>
                    semaforo_b("amarillo");<br>
                    semaforo_c("verde");<br>
                </code>
                <br>
                Resultados:
                <br>
                <?php 
                    require_once("../ejercicio1/ejercicio1.php");
                ?>
            </p>
        </article>
        <article id="ejercicio2">
            <h3>Ejercicio 2</h3>
            <p>
                Ejecuto el ejercicio 2, teniendo de variables "$a = 6" y "$b = 8"
                    <br>
                    <code>
                        echo binomioCuadradoPerfecto_a($a,$b);<br>
                        echo binomioCuadradoPerfecto_b($a,$b);"<br>
                    </code>
                    <br>
                    Resultados:
                    <br>
                    <?php 
                        require_once("../ejercicio2/ejercicio2.php");
                    ?>
            </p>
        </article>
        <article id="ejercicio3">
            <h3>Ejercicio 3</h3>
            <p>
            Ejecuto el ejercicio 3, teniendo de variables "$texto1 = Hola" y "$texto2 = desde PHP"
                    <br>
                    <code>
                        echo concatenar($texto1, $texto2);
                    </code>
                    <br><br>
                    Resultados:
                    <br>
                    <?php 
                        require_once("../ejercicio3/ejercicio3.php");
                    ?>

            </p>
        </article>
        <article id="ejercicio4">
            <h3>Ejercicio 4</h3>
            <p>
            Ejecuto el ejercicio 4, teniendo de variables "$numero = 0"
                    <br>
                    <code>
                        echo "Valor anterior: $numero"; <br>
                        incrementar($numero); <br>
                        echo "Valor actual: $numero";<br>
                    </code>
                    <br><br>
                    Resultados:
                    <br>
                    <?php 
                        require_once("../ejercicio4/ejercicio4.php");
                    ?>

            </p>
        </article>
        <article id="ejercicio5">
            <h3>Ejercicio 5</h3>
            <p>
            Ejecuto el ejercicio 5, teniendo "$array = array(1,2,3,4,5)"
                    <br>
                    <code>
                    $array = array(1,2,3,4,5);<br>
                    $resultado1 = sumatoria_a($array);<br>
                    $resultado2 = sumatoria_b($array);<br>
                    $resultado3 = sumatoria_c($array);<br>
                    echo $resultado1;<br>
                    echo $resultado2;<br>
                    echo $resultado3; <br>

                    </code>
                    <br>
                    Resultados:
                    <br>
                    <?php 
                        require_once("../ejercicio5/ejercicio5.php");
                    ?>  
            </p>
        </article>
        <article id="ejercicio6">
            <h3>Ejercicio 6</h3>
            <p>
            Ejecuto el ejercicio 6, teniendo de variables "$horario = 9" y     "$saludoObjeto = new Saludar("Alan","Aruquipa")";

                    <br>
                    <code>
                    echo $saludoObjeto->saludarFormal($horario); <br>
                    echo $saludoObjeto->saludarInformal($horario);<br>
                    </code>
                    <br>
                    Resultados:
                    <br>
                    <?php 
                        require_once("../ejercicio6/ejercicio6.php");
                    ?>  
            </p>
        </article>
    </main>
    <footer id="pie-pagina">
        Hecho por &copy;Alan
    </footer>
</body>
</html>