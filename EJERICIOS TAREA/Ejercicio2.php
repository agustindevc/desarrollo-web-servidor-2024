<!-- EJERCICIO 2: Realiza un formulario que reciba 3 números: a, b y c.
 Se mostrarán en una lista los múltiplos de c que se encuentren entre a y b.
Por ejemplo, si a = 3, b = 10, c = 2
Los múltiplos de 2 entre 3 y 10 son: 4, 6, 8 y 10 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>
    <!--Declaracion del formulario-->
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
    <ul> <!--inicializacion de la lista-->
    <?php
        // Ejecucion de peticion post
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["Numero1"];
            $num2 = $_POST["Numero2"];
            $num3 = $_POST["Numero3"];

            
            //bucle para encontrar numeros primos de num3 entre num2 y num2
    
            while($num1 < $num2){ //
                if($num1 % $num3 == 0){
                    echo "<li>$num1</li>";
                }
                $num1++;
            }
        }
    ?>
    </ul>
</body>
</html>