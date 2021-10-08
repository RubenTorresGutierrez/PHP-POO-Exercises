<?php

    //Importaciones
    require_once 'calcular.php';

    //Funciones
    function mostrarOperacion(){

        //Variables
        $calculadora = new Calcular($_POST['num1'], $_POST['num2']);

        if(isset($_POST['enviar'])){
            switch($_POST['operador']){
                case '+':
                    $resultado = $calculadora->sumar();
                    break;
                case '-':
                    $resultado = $calculadora->restar();
                    break;
                case '*':
                    $resultado = $calculadora->multiplicar();
                    break;
                case '/':
                    $resultado = $calculadora->dividir();
                    break;
            }
            echo 'El resultado de la operación es: '.$resultado;
        }

    }


?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="rtorresgutiérrez.guadalupe@alumnado.fundacionloyola.net" />
        <title>Cálculos</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <input type="text" name="num1" id="" placeholder="Número 1" />
            <input type="text" name="num2" id="" placeholder="Número 2" />
            <select name="operador" id="">
                <option value="" hidden>-- Seleccionar un operador --</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="submit" value="ENVIAR" name="enviar" />
            <input type="reset" value="CANCELAR" />
        </form>
        <?php
            mostrarOperacion();
        ?>
    </body>
</html>