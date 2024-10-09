<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencias</title>
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>
    <!--
    /**
     * CREAR UN FORMULARIO QUE RECIBA DOS PARAMETROS: BASE Y EXPONENTE
    * CUANDO SE ENVIE EL FORMULARIO SE CALCULARA EL RESULTADO DE ELEVAR LA BASE AL EXPONENTE
    *   EJEMPLOS:
    *2 ELEVADO A 3 = 8 => 2X2X2 = 8
    *3 ELEVADO A 2 = 9 => 3X3X3 =9
    *2 ELEVADO A 1 = 2
    *3 ELEVADO A 0=1
    */
    -->

    <form action="" method="post">
        <label for="base">Base</label> <!--Se puede usar placeholder en lugar de lablel-->
        <input type="text" name="base" id="base" placeholder="Base">
        <label for="exponente">Exponente</label>
        <input type="text" name="exponente" id="exponente">
        <input type="submit" value="Enviar">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $base = $_POST["base"];
            $exponente = $_POST["exponente"];
            $resultado = 1;

            
            for($i = 0; $i < $exponente; $i++){
                $resultado *= $base;
            }
            echo "<h1>El resultado es $resultado</h1>";
        }
    ?>
    
    
</body>
</html>