<?php 
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$nre = $_POST['nre'];

echo "Hola, " .htmlspecialchars($nombre) . " " . htmlspecialchars($apellidos) . ". Tu NRE es: " . htmlspecialchars($nre) . "<br>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <h2>Formulario</h2>
    <form action="formularios.php" method="POST">
        <label>Nombre:</label><br>
        <input type="text" name="nombre"><br><br>
        <label>Apellidos:</label><br>
        <input type="text" name="apellidos"><br><br>
        <label>Edad:</label><br>
        <input type = "number" name="edad"><br><br>
        <label>NRE:</label><br>
        <input type = "text" id="nre" name="nre"><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
