<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas</title>
</head>
<body>
    <?php
    $numero = "2";
    $numero = (int) $numero; //Casteo para cambiar el tipo

    if($numero === 2) {
        echo"EXITO";
    }else{
        echo"NO EXITO";
    }

    /*  "2" == 2      "2" ES IGUAL A 2.
        "2" !== "2   NO ES IDENTICO A 2.
        2 === 2 2    SI ES IDENTICO A 2.
        2 !== 2      NO ES IDENTICO A 2.0.
    */

    $hora = date("G");
    var_dump($hora);

    /*Si hora ENTRE 6 Y 11, es MAAÑANA.
        Si $hora ENTRE 12 Y 14, ES MEDIODIA.
        SI $hora ENTRE 15 Y 20, ES TARDE.
        SI $hora ENTRE 21 Y 24, ES NOCHE.
        SI $hora ENTRE 1 Y 5, ES MADRUGADA.
    */

    if($hora >=6 && $hora <= 11):
        echo("Es la mañana");
    elseif($hora >= 12 && $hora <= 14):
        echo("Es la mediodia");
    elseif($hora >= 15 && $hora <= 20):
        echo("Es la tarde");
    elseif($hora >= 21 && $hora <= 1):
        echo("Es la noche");
    elseif($hora >= 2 && $hora <= 5):
        echo("Es la madrugada");
    endif;

    Hola como estas
    $hora_exacta = date("G:i:s:u");
    echo($hora_exacta);

    #SWITCH
    $n = rand(1,3);

    switch($n){
        case 1:
            echo "El numero es 1";
            break;
        case 2:
            echo "El numero es 2";
            break;
        default:
            echo "El numero es 3";
    }

    //EJERCICIO SWITCH
    $dia = date("l");
    echo "<h2>Hoy es $dia</h2>";

    //Tenemos clases lunes, meircoles y viernes, elr esto no
    //hacer un  switch que devuelva si el ese dia tenemos clase o no.

    switch($dia){
        case "Monday";
        case "Wednesday":
        case "Friday":
            echo "Hoy tenemos clase.";
            break;
        default:
            echo "Hoy no tenemos clase.";
    }
    ?>
</body>
</html>