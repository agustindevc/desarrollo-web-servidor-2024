<!--EJERCICIO 1

    Desarrollo web en entorno servidor => Alejandra
    Desarrollo  Web en entorno cliente => José Miguel
    Diseño de interfaces erb => José Miguel
    Despliegue de aplicaciones => Jaime
    EMpresa e iniciativa emprendedora => Andrea
    Ingles => Virginia
    
    MOSTRARLO TODO EN UNA TABLA-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
    
</body>
</html>
    <table>
        <caption>Asignaturas</caption>
        <thead>
            <tr>
                <th>Asignatura</th>
                <th>Profesor</th>
            </tr>
        </thead>
        </tbody>
            <tr>
                <td>Desarrollo web en entorno servidor</td>
                <td>Alejandra</td>
            </tr>
            <tr>
                <td>Desarrollo  Web en entorno cliente</td>
                <td>José Miguel</td>
            </tr>
            <tr>
                <td>Diseño de interfaces web</td>
                <td>José Miguel</td>
            </tr>
            <tr>
                <td>Despliegue de aplicaciones</td>
                <td>Jaime</td>
            </tr>
            <tr>
                <td>EMpresa e iniciativa emprendedora</td>
                <td>Andrea</td>
            </tr>
            <tr>
                <td>Inglés</td>
                <td>Virginia</td>
            </tr>

        <tbody>
    </table>

<!--EJERCICIO 2

    Francisco => 3
    Daniel => 5
    Aurora => 7
    Samuel => 9

    MOSTRAR EN UNA TABLA CON 3 COLUMNAS
    -COLUMNA 1: ALUMNO
    -COLUMNA 2: NOTA
    -COLUMNA 3: SI NOTA < 5 SUSPENSO, SINO APROBADO
-->

<?php
$alumno;
$nota;
$condicion;
?>

<table>
    <thead>
        <tr>
            <td>ALUMNO</td>
            <td>NOTA</td>
            <td>CONDICION</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php
                $alumno = "Francisco";
                echo($alumno)
                ?>
            </td>
            <td>
                <?php
                    $nota = 3;
                    echo($nota);
                ?>
            </td>
            <td>
                <?php
                    if($nota < 5){
                        $condicion="Suspenso";
                    }
                    else{
                        $condicion = "Aprobado";
                    }
                    echo($condicion);
                ?>
            </td>
        <tr>
            <td>
                <?php
                $alumno = "Daniel";
                echo($alumno)
                ?>
            </td>
            <td>
                <?php
                    $nota = 5;
                    echo($nota);
                ?>
            </td>
            <td>
                <?php
                    if($nota < 5){
                        $condicion="Suspenso";
                    }
                    else{
                        $condicion = "Aprobado";
                    }
                    echo($condicion);
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                $alumno = "Aurora";
                echo($alumno)
                ?>
            </td>
            <td>
                <?php
                    $nota = 10;
                    echo($nota);
                ?>
            </td>
            <td>
                <?php
                    if($nota < 5){
                        $condicion="Suspenso";
                    }
                    else{
                        $condicion = "Aprobado";
                    }
                    echo($condicion);
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                $alumno = "Samuel";
                echo($alumno)
                ?>
            </td>
            <td>
                <?php
                    $nota = 9;
                    echo($nota);
                ?>
            </td>
            <td>
                <?php
                    if($nota < 5){
                        $condicion="Suspenso";
                    }
                    else{
                        $condicion = "Aprobado";
                    }
                    echo($condicion);
                ?>
            </td>
        </tr>
    </tbody>
</table>

