<?php
$numero1 = (float)($_POST['numero1'] ?? 0);
$numero2 = (float)($_POST['numero2'] ?? 0);
$operacion = $_POST['operacion'] ?? '';

$resultado = '';

switch ($operacion) {
        case 'suma':
            $resultado = $numero1 + $numero2;
            break;
        case 'resta':
            $resultado = $numero1 - $numero2;
            break;
        case 'multiplicacion':
            $resultado = $numero1 * $numero2;
            break;
        case 'division':
            $resultado = $numero2 != 0 ? $numero1 / $numero2 : "No se puede dividir entre 0";
            break;
        default:
            $resultado = "Operación no válida";
    }

    echo "$numero1 $operacion $numero2 = $resultado <br><br>";


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
</head>
<body>
    <h2>Formulario 1</h2>
    <form action="formulario1.php" method="POST">
        <label>Numero1:</label><br>
        <input type="number" name="numero1" step="any" required><br><br>

        <label>Numero2:</label><br>
        <input type="number" name="numero2" step="any" required><br><br>

        <label>Operacion:</label><br>
        <select name="operacion" required>
            <option value="">--Selecciona una operación--</option>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>