<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Elige tu color favorito</title>
</head>
<body>
    <h2>Selecciona tu color favorito</h2>
    <form action="eleccion.php" method="POST">
        <label for="color">Color:</label>
        <select name="color" id="color" required>
            <option value="red">Rojo</option>
            <option value="blue">Azul</option>
            <option value="green">Verde</option>
            <option value="yellow">Amarillo</option>
            <option value="purple">Morado</option>
        </select>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>

