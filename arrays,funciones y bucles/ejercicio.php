<?php
$nombrecompleto= 'Alberto Vicente Villa';

$dniNumero= 49195678;
$letras = "TRWAGMYFPDXBNJZSQVHLCKE";
$indice = intval($dniNumero) % 23;
$letraDNI = $letras[$indice]; 

$primeros2 = substr($dniNumero, 0, 2);
$ultimos2 = substr($dniNumero, -2);
$numAstericos = strlen($dniNumero) - 4;
$dniOculto = $primeros2 . str_repeat("*", $numAstericos) . $ultimos2;
$nombreSinVocales = str_replace(
    ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"],
    "*",
    $nombrecompleto
);
?>

<html>
    <head>
        <title>Prueba</title>
    </head>

    <body>
        <h1>Prueba de Nombre y DNI</h1>
        <p>Mi nombre completo tiene <?= strlen ($nombrecompleto)?> caracteres</p>
        <p>Mi nombre es <?=substr ($nombrecompleto, 0, $length = 7 )?></p>
        <p>Mi dni es el <?=$dniNumero?> y la letra del mismo es <?=$letraDNI?></p>
        <p>Mi DNI es <?= $dniOculto ?></p>
        <p>Mi nombre con vocales reemplazadas: <?= $nombreSinVocales ?></p>
    </body>
</html>