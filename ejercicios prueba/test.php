
<?php
    $nombre = 'Alberto';
    $edad = 25;
    $altura = 1.95;
    $es_estudiante = true;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Prueba</title>
</head>
<body>
    <h1>Pruebas con variables y tipos de datos</h1>
    <p>Mi nombre es <?= var_dump($nombre) ?></p>
    <p>Mi edad es <?= var_dump($edad) ?></p>
    <p>Mi altura es <?= var_dump($altura) ?></p>
    <p>Soy estudiante: <?= var_dump($es_estudiante) ?></p>

    <p>Mi edad en entero es <?= (int)$edad ?> </p>
    <p>Mi edad es <?= var_dump($edad) ?> </p>
    <p>Mi edad en entero es <?= intval ($edad) ?> </p>
    <p>Mi edad es <?= var_dump ($edad) ?> </p>
    <p>Mi edad en entero es <?= settype($edad, "integer") ?> </p>
    <p>Mi edad es <?= var_dump ($edad) ?> </p>

    <p><?= __LINE__?></p>
    <p><?=__FILE__?></p>
    <p><?= PHP_OS ?></p>
    <p><?= PHP_VERSION ?></p>
</body>

</html>