<!--Realiza un formulario que reciba dos números y devuelva
todos los números primos dentro de ese rango (incluidos los extremos).-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="Numero1">Numero 1</label>
            <input type="text" name="Numero1" id="Numero1">
        <label for="Numero2">Numero 2</label>
            <input type="text" name="Numero2" id="Numero2">
        <input type="submit" value="Enviar">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["Numero1"];
            $num2 = $_POST["Numero2"];

            //bucle para encontrar numeros primos
            
            for($i = $num1; $i <= $num2; $i++){
                $primo = true;

                //bucle para comprobar si el numero $i es primo
                for($j = 2; $j < $i; $j++){
                    if($i % $j == 0){
                        $primo = false;
                        break; //se sale del bucle al comprobar que no es primo
                    }
                }
                //imprime por pantalla si es primo
                if($primo){
                        echo "<h2>$i</h2>";
                }
            }
        }
        
        
    ?>
</body>
</html>

