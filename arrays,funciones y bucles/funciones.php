<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
   <h2>Ejercicio 1</h2> 
</body>
</html>

<?php

function esPar($numero) {
    
    if ($numero % 2 == 0) {
        echo "true";
    } else {
        echo "false";
    }
}

    echo esPar(4);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h2>Ejercicio 2</h2>
</body>
</html>

<?php
    
    function sumarPares($numeros) {
    $suma = 0; 
    
    foreach ($numeros as $num) {
        if ($num % 2 == 0) { 
            $suma += $num;   
        }
    }
    
    return $suma;
}

$lista = [1, 2, 3, 4, 5, 6, 7, 8]; 

echo "La suma de los números pares es: " . sumarPares($lista);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h2>Ejercicio 3</h2>
</body>
</html>

<?php
$alumnos = [
    [
        "nombre" => "Francisco",
        "apellidos" => "castaño Ruiz",
        "edad" => 20,
        "nre" => "1234A"
    ],
    [
        "nombre" => "Alberto",
        "apellidos" => "Vicente Villa",
        "edad" => 18,
        "nre" => "5678B"
    ],
    [
        "nombre" => "Manuel",
        "apellidos" => "Lopez Medina",
        "edad" => 15,
        "nre" => "9101C"
    ]
];

    function alumnoMasJoven($alumnos) {
        $masJoven = $alumnos[0];
    

    foreach ($alumnos as $alumno) {
        if ($alumno['edad'] < $masJoven['edad']) {
            $masJoven = $alumno;
        }
    }
    return $masJoven;
}

$masJoven = alumnoMasJoven($alumnos);

echo "El alumno más joven es: " . $masJoven['nombre'] . " " . $masJoven['apellidos'] . 
     " " . $masJoven['edad'] . " años";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h2>Ejercicio 4</h2>
</body>
</html>

<?php
    $alumnos1 = array(
        array("nombre" => "Alondra", "apellidos" => "Ferrer Motos", "edad" => 21, "nre" => "5678H"),
        array("nombre" => "Adrian", "apellidos" => "Valenzuela Villa", "edad" => 28, "nre" => "67324J"),
        array("nombre" => "Miriam", "apellidos" => "Lopez Monreal", "edad" => 15, "nre" => "55858Q"),
    );

    function eliminarMenoresDeEdad(&$alumnos1) {
        $eliminado = false;

        foreach ($alumnos1 as $index => $alumno1) {
            if ($alumno1['edad'] < 18){
                unset($alumnos1[$index]);
                $eliminado = true;
            }
        }


        return $eliminado;
    }
?>


<?php
    $n = $_GET['n'];

    function fibonacci($n) {
        if ($n == 0 || $n == 1) return 1;
        $pos1 = 1;
        $pos2 = 1;
        for ($i = 3; $i <= $n; $i++){
            $temp = $pos1 + $pos2;
            $pos1 = $pos2;
            $pos2 = $suma;
        }
        return $suma;
    }
?>


<?php
    function primos($n) {
    $lista = [];

        $conteo = 0;
        $numero = 1;

        while(sizeof($lista) < $n){
            if(esPrimo($numero)) {
                array_push($lista, $numero);
            }
            $numero++;
        }
     
     return $lista;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros primos </title>
</head>
<body>
    <h2>Numeros primos hasta <?= $n ?></h2>
    <p><?= implode(",", primos($n))?></p>
</body>
</html>





