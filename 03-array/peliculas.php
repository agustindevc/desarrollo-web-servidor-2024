<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
    $peliculas = [
        ["Karate a muerte en Torremolinos", "Accion", 1975],
        ["Sharknado 1-5", "Accion", 2015],
        ["Princesa por sorpresa 2", "Comedia", 2008],
        ["Temblores 4", "Terror", 2018],
        ["Cariño, he encogido a los niños", "Aventuras", 2001],
        ["Stuart Little", "Infantil", 2000],
    ];
    ?>

<table>
        <thead>
            <tr>
                <th>Pelicula</th>
                <th>Genero</th>
                <th>Año</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($peliculas as $pelicula){
                list($titulo, $genero, $anno)= $pelicula;
                echo "<tr>";
                echo "<td>$titulo</td>";
                echo "<td>$genero</td>";
                echo "<td>$anno</td>";
                echo "</tr>";            }
            ?>
        </tbody>
    </table>
</body>
</html>