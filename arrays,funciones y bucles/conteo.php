
<?php
    function limpiarTexto($texto) {
        $texto = strtolower($texto);
        $texto = str_replace(['.', ',', ';', '¿', '?', '¡', '!'], '', $texto)
        return $texto;
    }

    function conteoPalabras($texto) {
        $texto = limpiarTexto($texto);
        $conteo = [];
        foreach(explode(" ", $texto) as $palabra ) {
            if (isset($conteo[$palabra])) {
                $conteo[$palabra]++;
            } else {
                $conteo[$palabra] = 1;
            }
        }
        return $conteo;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conteo de palabras</title>
</head>
<body>
    <h2>COntador de palabras </h2>
    <pre>
        
        <?php 
        $conteo = conteoPalabras($texto);
        print_r(conteoPalabras($texto))?>
        <?
    </pre>
</body>
</html>