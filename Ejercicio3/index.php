<?php

    //Importaciones
    require_once 'fecha.php';

    //Funciones
    function mostrarFecha(){

        if(isset($_POST['enviar']) && !empty($_POST['fecha'])){

            $fecha = new Fecha($_POST['fecha']);
            echo '<label for="">El resultado es: </label>';
            echo '<input type="text" value="' . $fecha->obtenerFecha() . '" /><br />';
            echo $fecha->obtenerDiasMes();

        }

    }

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="rtorresgutierrez.guadalupe@alumnado.fundacionloyola.net" />
        <title>Ejercicio Básico de POO (2)</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <input type="text" name="fecha" placeholder="Fecha dd/mm/aaaa" />
            <input type="submit" value="ENVIAR" name="enviar" />
            <input type="reset" value="CANCELAR" />
            <br /><br />
            <?php

                mostrarFecha();

            ?>
        </form>
    </body>
</html>