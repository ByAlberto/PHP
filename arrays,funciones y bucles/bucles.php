<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <h2>Ejercicio 1</h2>
    </body>
</html>

<?php
    for ($i = 0; $i <= 100; $i+= 2){
        echo $i;
    }
?>

<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <h2>Ejercicio 2</h2>
    </body>
</html>

<?php 
    $a = 0;
    $suma = 0;
    while ($suma < 1000) {
        $suma += $a;
        echo "a = $a → suma = $suma<br>";
        $a++;
    }
?>

<html>
    <head>
        <title>Ejercicio 3</title>
    </head>
    <body>
        <h2>Ejercicio 3</h2>
    </body>
</html>

<?php
$array = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
 
    foreach ($array as $valor) {
    echo "<h2>$valor</h2>";
    }
?>

