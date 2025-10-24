<?php
$n = $_GET['n'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <h2>Tabla de multiplicar</h2>
    <table>
        <?php for($i = 1; $i <= $n; $i++): ?>
            <tr>
                <?php for($j = 1; $j <= $n; $j++): ?>
                    <td>
                        <?= $i, "*", $i, "=", $j*$i ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>