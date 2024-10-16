<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista con while</h1>
    <?php
        //BUCLE WHILE
        $i = 1;

        echo"<ul>";
        while($i <=10){
            echo "<li>$i</li>";
            $i ++;
        }
        echo "</ul>";

    ?>
    <h1>Lista con while Alternativa</h1>
    <?php
    $i = 1;

    echo"<ul>";
    while($i <=10):
        echo "<li>$i</li>";
        $i ++;
    endwhile;
    echo "</ul>";
    ?>

    <!--EJERCICIO 2: MOSTRAR EN UNA LISTA LOS NUMERO MULTIPLOS DE 3 USANDO WHILE E IF-->
    <!--EJERCICIO 3: CALCULAR LA SUMA DE LOS NUMERO PARES ENTRE 1 Y 20-->
    <!--EJERCICIO 4: CALCULAR EL FACTORIAL DE 6 CON WHILE-->

    <?php
    $i = 1;

        echo"<ul>";
        while($i <= 10){
            echo "<li>$i</li>";
            $i ++;
        }
        echo "</ul>";
    ?>

<h1>Ejercicio for</h1>
<?php

$n = 2;
$numerosPrimos = 0;

echo "<ol>";
while($numerosPrimos < 50) {
    $primo = true;
   for($i = 2; $i <= $n/2; $i++){ //bucle que comprueba si el numero es primo o no
       if($n%$i == 0){
        $primo = false;
        break;
       }
    }
       if($primo){
        $numerosPrimos++;
        echo"<li>$numero<li>";
       }
       $n++;
   }
echo"</ol>";
?>
</body>
</html>

<!--El bucle `foreach` en PHP se utiliza para recorrer estructuras de datos iterables, como **arrays** o **objetos**, de manera sencilla. A diferencia de otros bucles como `for` o `while`, que requieren controlar explícitamente el índice o el contador, `foreach` simplifica el proceso al iterar directamente sobre los elementos de la colección.

### Sintaxis básica:
```php
foreach ($array as $valor) {
    // Código a ejecutar con cada valor
}
```

### Ejemplo básico con un array:
```php
$frutas = ["manzana", "naranja", "plátano"];

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
```
**Resultado:**
```
manzana
naranja
plátano
```

En este ejemplo, el bucle recorre cada elemento del array `$frutas`, y en cada iteración, el valor del elemento actual se asigna a la variable `$fruta`, la cual puedes usar dentro del bucle.

### Sintaxis con clave y valor:
Además, si estás trabajando con un array asociativo, puedes usar `foreach` para acceder tanto a la **clave** como al **valor**:

```php
foreach ($array as $clave => $valor) {
    // Código a ejecutar con clave y valor
}
```

### Ejemplo con un array asociativo:
```php
$edades = ["Juan" => 25, "Ana" => 30, "Pedro" => 22];

foreach ($edades as $nombre => $edad) {
    echo "$nombre tiene $edad años.<br>";
}
```

**Resultado:**
```
Juan tiene 25 años.
Ana tiene 30 años.
Pedro tiene 22 años.
```

### Ventajas de `foreach`:
1. **Simplicidad**: No necesitas gestionar manualmente un índice o un contador.
2. **Mejora la legibilidad**: Especialmente útil para trabajar con arrays o colecciones grandes.
3. **Seguridad**: Previene errores típicos relacionados con la manipulación incorrecta del índice, como ocurre en los bucles `for`.

### Nota:
- `foreach` no modifica el array original a menos que uses referencias, es decir, si quieres modificar el valor dentro del array, puedes hacerlo así:

```php
foreach ($array as &$valor) {
    $valor *= 2; // Multiplica cada valor por 2
}
```

En resumen, el bucle `foreach` es una herramienta fundamental en PHP para iterar fácilmente sobre arrays
 y objetos sin complicaciones, proporcionando un código más claro y conciso.-->