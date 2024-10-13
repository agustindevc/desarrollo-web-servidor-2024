<!-- EJERCICIO 1: Realiza un formulario que reciba 3 números y devuelva el mayor de ellos. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>

<!-- Formulario para pedir los numeros al usuario -->
    <form action="" method="post">
        <label for="Numero1">Numero 1</label>
        <input type="text" name="Numero1">
        <label for="Numero2">Numero 2</label>
        <input type="text" name="Numero2">
        <label for="Numero3">Numero 3</label>
        <input type="text" name="Numero3">
        <input type="submit" value="Enviar"> 
    </form>

    <!-- Codigo para trabajar el formulario -->
    <?php

        // Ejecucion de peticion post 
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            // definicion de variables
            $num1 = $_POST["Numero1"];
            $num2 = $_POST["Numero2"];
            $num3 = $_POST["Numero3"];

            //Selecciono el numero mayor y lo muestro por pantalla
            if($num1 > $num2 && $num1 > $num3){
                echo"<h1>El mayor es: $num1</h2>";
            }
            elseif($num2 > $num1 && $num2 > $num3){
                echo"<h1>El mayor es: $num2</h2>";
            }
            elseif($num3 > $num1 && $num3 > $num2){
                echo"<h1>El mayor es: $num3</h2>";
            }
            
        }
    ?>
</body>
</html>