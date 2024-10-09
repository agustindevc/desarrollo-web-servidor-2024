<!--CREAR UN FORMULARIO QUE RECIBA UN NUMERO
SE MOSTRARA LA TABLA DE MULTIPLICAR DE ESE NUMERO EN UNA TABLA HTML

2 X 1 = 2
2 X 2 = 4
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicar</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
    

<form action="" method="post"> 
    <label for="Numero">Numero</label>     
    <input type="text" name="Numero"> 
    <input type="submit" value="Enviar"> 
</form>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["Numero"];
?>
<table>
    <?php
              
        for($i = 0; $i <= 10; $i++){
            $resultado = $num * $i;
    
            echo"<tr>";
                echo"<td>$num</td>";
                echo"<td>X</td>";
                echo"<td>$i<td>";
                echo"<td>=<td>";
                echo"<td>$resultado</td>";
            echo"</tr>";

        }
    }
    ?>
</table>

</body>
</html>