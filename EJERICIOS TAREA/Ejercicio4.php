<!--Realiza un formulario que funcione a modo de conversor de temperaturas.
Se introducirá en un campo de texto la temperatura, y luego tendremos un select
para elegir las unidades de dicha temperatura, y otro select para elegir las
unidades a las que queremos convertir la temperatura.

Por ejemplo, podemos introducir "10", y seleccionar "CELSIUS",
y luego "FAHRENHEIT". Se convertirán los 10 CELSIUS a su equivalente en FAHRENHEIT.

En los select se podrá elegir entre: CELSIUS, KELVIN y FAHRENHEIT.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="Temperatura">Temperatura</label>
            <input type="text" name="Temperatura" id="Temperatura">
            <br>
        <label for="unidades">Indica la unidad de medida de la temperatura ingresada:</label>
            <select name="Unidad" id="unidad">
                <option value="Celsius">Celcius</option>
                <option value="Kelvin">Kelvin</option>
                <option value="Farenheit">Farenheit</option>
            </select>
            <br>
        <label for="Conversion">Indica la unidad de medida a la que la quieres convertir</label>
            <select name="conversion" id="conversion">
                <option value="Celsius">Celsius</option>
                <option value="Kelvin">Kelvin</option>
                <option value="Farenheit">Farenheit</option>
            </select>
            <br>
        <input type="submit" value="Convertir">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $tempIngresada = $_POST["Temperatura"];
            $unidadIngresada = $_POST["Unidad"];
            $conversion = $_POST["conversion"];
            
            if($unidadIngresada == "Farenheit"){
                $resultado = match($conversion){
                    "Celsius" => ($tempIngresada * 5/9),
                    "Kelvin" => ($tempIngresada - 32) * 5/9 + 273.15
                };
            }
            elseif($unidadIngresada == "Celsius"){
                $resultado = match($conversion){
                    "Farenheit" => ($tempIngresada * 9/5)+32,
                    "Kelvin" =>  ($tempIngresada + 273.15)
                };
            }else {
                $resultado = match($conversion){
                    "Farenheit" => ($tempIngresada - 273.25)* 9/5 +32,
                    "Celsius" => ($tempIngresada - 273.15)
                };
            }
        echo"<h2>Conversion: $resultado</h2>";
            
        }
    ?>
</body>
</html>