<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>
    
<!--EJERCICIO 1

    Desarrollo web en entorno servidor => Alejandra
    Desarrollo  Web en entorno cliente => José Miguel
    Diseño de interfaces erb => José Miguel
    Despliegue de aplicaciones => Jaime
    EMpresa e iniciativa emprendedora => Andrea
    Ingles => Virginia
    
    MOSTRARLO TODO EN UNA TABLA-->

<!--Resuelto con la profe-->

<?php

    $asignaturas = [
        "Desarrollo web en entorno servidor" => "Alejandra",
        "Desarrollo  Web en entorno cliente" => "José Miguel",
        "Diseño de interfaces web" => "José Miguel",
        "Despliegue de aplicaciones" => "Jaime",
        "Empresa e iniciativa emprendedora" => "Andrea",
        "Ingles" => "Virginia"
    ];
?>

<table>
    <thead>
        <tr>
            <th>Asignatura</th>
            <th>Profesor</th>
        </tr>
    </thead>
    <tbody>
        <?php
        ksort($asignaturas); //para ordenarlo (ver web php las diferentes opciones de ordenamiento de arrays)
        foreach($asignaturas as $asignatura => $profesor) {//IMPORTANTE EN LOS NOMBRES, EL ARRAY EN PLURAL Y LUEGO EN SINGULAR PARA CADA UNO
            echo "<tr>";
            echo "<td>$asignatura</td>";
            echo "<td>$profesor</td>";
            echo "</tr>";

        }
        ?>
    </tbody>
</table>


<!--RESUELTO POOR MI-->

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
    <br><br><br>

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

    <!--RESUELTO POR LA PROFESORA0-->

    <?php
        $estudiantes = [
            "Francisco" => 3,
            "DAniel" => 5,
            "Aurora" => 10,
            "Ismael" => 0,
            "Luis" => 7,
            "Samuel" => 3,
            "Juanjo" => 2,
            "Vicente" => 1,
        ];
    ?>

    <table>
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Nota</th>
                <th>Calificación</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //if($nota < 5) echo "<tr class='Suspenso'>";
            //else echo "<tr class='Aprobado'>";

            foreach($estudiantes as $estudiante => $nota) { ?> 
                <tr class="<?php if($nota < 5) echo "suspenso"; else echo "aprobado"; ?>">
                
                    <td><?php echo $estudiante ?></td>
                    <td><?php echo $nota ?></td>
                    <td>
                        <?php
                            if($nota < 5){
                                echo "Suspenso";
                            }else{
                                echo"Aprobado";
                            }
                        ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

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
<?php
/**
 * Insertar dos nuesvos estudiantes, con notas aleatorias entre 0 y 10
 * 
 * Borrar une studiante por clave
 * 
 * Mostrar en una nueva tabla todo ordenado por los nombres en orden alfabeticamente inverso
 * 
 * Mostrar en una nueva tabla todo ordenado por la nota de 10 a 0 (orden inverso)
 * 
 */
?>


</body>
</html>

