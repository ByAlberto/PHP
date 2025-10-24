<?php
    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $_SESSION['nombre'] = $nombre;
        header('Location: welcome-php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logearse</title>
</head>
<body>
    <h1>Iniciar sesion</h1>
        <form action="welcome.php" method="POST">
            <label>Nombre:</label><br>
            <input type="text" name="nombre"><br><br>
            <button type=submit>Enviar</button>
        </form>
    
</body>
</html>