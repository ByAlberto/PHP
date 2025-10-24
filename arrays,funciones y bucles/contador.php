<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['cont'])) {
        $_SESSION['cont'] = 0;
    } elseif (!isset($_SESSION['cont'])) {
        $_SESSION['cont'] = 1;
    } else {
        $_SESSION['cont']++;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contador de Visitas</h1>
    <p>Has visitado esta paǵina <?php echo $_SESSION['cont']; ?> veces.</p>
    <form method = "post">
        <button type="submit">Reiniciar</button>
</body>
</html>