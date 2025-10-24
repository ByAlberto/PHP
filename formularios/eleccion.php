<?php
if (isset($_POST['color'])) {
    $color = $_POST['color'];
    // Guardamos la cookie durante 30 días
    setcookie("color_favorito", $color, time() + (30 * 24 * 60 * 60));
    // Redirigimos a la misma página para que la cookie esté disponible
    header("Location: eleccion.php");
    exit;
} elseif (isset($_COOKIE['color_favorito'])) {
    $color = $_COOKIE['color_favorito'];
} else {
    // Si no hay cookie ni formulario, redirige al formulario
    header("Location: colores.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tu color favorito</title>
    <style>
        body {
            background-color: <?= htmlspecialchars($color) ?>;
            color: white;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        a {
            color: white;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Tu color favorito es: <?= htmlspecialchars($color) ?></h2>
    <p><a href="colores.php">Elegir otro color</a></p>
</body>
</html>