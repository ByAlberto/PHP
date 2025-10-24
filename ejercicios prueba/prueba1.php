<!doctype html>
<head>
    <title>Ejercicios PHP: Cadenas de texto</title>
</head>
<body>

    <h1>Ejercicios sobre operaciones con cadenas de texto (PHP)</h1>

    <p>Implementa las soluciones en este mismo archivo dentro de las secciones PHP indicadas.</p>

    <section>
        <h2>Ejercicio 1 — Concatenación y formato</h2>
        <p>Declara varias variables de tipo string (nombre, apellido, ciudad) y:</p>
        <ul>
            <li>Concaténalas con distintos métodos (operador ., interpolación doble comillas).</li>
        </ul>

<?php
    $nombre = "Alberto";
    $apellido1 = "Vicente";
    $apellido2 = "Villa";
    $ciudad = "Cieza";

    # Concatenación con el operador
    $frase1 = "Me llamo " . $nombre . " " . $apellido1 . " y vivo en " . $ciudad . ".";

    # Concatenación mediante interpolación de variables en comillas dobles
    $frase2 = "Me llamo $nombre $apellido1 y vivo en $ciudad.";

     # Ejemplo combinando texto y variables
    $frase3 = sprintf("Me llamo %s %s y vivo en %s.", $nombre, $apellido1, $ciudad);

    echo "<p>$frase1</p>";
    echo "<p>$frase2</p>";
    echo "<p>$frase3</p>";
?>
</section>




<section>
<h2>Ejercicio 2 — Longitud, mayúsculas/minúsculas y recorte</h2>
        <p>Usa funciones para:</p>
        <ul>
            <li>Calcular la longitud de una cadena con `strlen`.</li>
            <li>Convertir a mayúsculas y minúsculas (`strtoupper`, `strtolower`).</li>
            <li>Recortar espacios en los extremos con `trim` y mostrar el antes/después.</li>
        </ul>


<?php
    $nombre = "Alberto";
    $textoconEspacios = "   Hola, soy $nombre   ";
        echo "Mi nombre tiene " . strlen($nombre) . " caracteres<br>";
        echo "Mi nombre en mayúscula es " . strtoupper($nombre) . "<br>";
        echo "Mi nombre en minúscula es " . strtolower($nombre) . "<br>";

        echo "Antes del trim: '<em>" . $textoconEspacios . "</em>'<br>";
        echo "Después de trim: '<em>" . trim($textoconEspacios) . "</em>'<br>";
?>
</section>


 <section>
<h2>Ejercicio 3 — Búsqueda y reemplazo</h2>
        <p>Realiza operaciones de búsqueda y sustitución:</p>
        <ul>
            <li>Comprobar si una subcadena existe dentro de una cadena (`strpos` o `str_contains`).</li>
            <li>Reemplazar una palabra por otra usando `str_replace`.</li>
            <li>Haz una versión sensible y otra insensible a mayúsculas (`str_ireplace`).</li>
            <li>Crea una contraseña con tu nombre + tu año de nacimiento, con las siguientes modificaciones:
                <ul>
                    <li>Reemplaza las vocales por (a=@, e=€, i=!, o=0, u=^).</li>
                </ul>
            </li>
        </ul>

        <?php
        $nombre = "Alberto";
    $pos1 = strpos($nombre, "bert");
    $pos2 = strpos($nombre, "lber");
    
    $frase = "Ignacio es el Peor profesor";

    
    $cambio_sensible = str_replace("peor", "mejor", $frase);

    
    $cambio_insensible = str_ireplace("peor", "mejor", $frase);

    $contraseña = "Alberto1999";
    $letrasCambiadas = str_ireplace (
        ["a", "e", "i", "o", "u"], 
        ["@", "€", "!", "0", "^"],
        $contraseña
    );

        echo "<p>\"bert\" está en la posición: $pos1</p>";
        echo "<p>\"lber\" está en la posición: $pos2</p>";

        echo "<h2>Reemplazos</h2>";
        echo "<p><strong>Original:</strong> $frase</p>";
        echo "<p><strong>Sensible a mayúsculas:</strong> $cambio_sensible</p>";
        echo "<p><strong>Insensible a mayúsculas:</strong> $cambio_insensible</p>";
        echo "<p><strong>Mi Contraseña cambiada es:</strong> $letrasCambiadas</p>";
        ?>
    </section>

    <section>
        <h2>Ejercicio 4 — Subcadenas y división</h2>
        <p>Trabaja con subcadenas:</p>
        <ul>
            <li>Extraer una subcadena con `substr`.</li>
            <li>Dividir una cadena por un separador con `explode` y volver a unir con `implode`.</li>
            <li>Usa `str_split` para convertir en array de caracteres.</li>
            <li>Escribe tu nombre de Star Wars:
                <ul>
                    <li>Nombre: las primeras 3 letras de tu primer apellido + las primeras 2 letras de tu nombre</li>
                    <li>Apellido: las primeras 3 letras de tu segundo apellido + las primeras 3 letras de tu ciudad</li>
                    <li>En nombre y apellido: convierte la primera letra a mayúscula y el resto a minúscula</li>
                </ul>
            </li>
        </ul>

        <?php
        $frase = "hola,soy Alberto,encantado";
        $frase2 = ["manzana","pera","melocoton"];
        $partes = explode(" ", $frase);
        $cadena= implode(",", $frase2);
        $sw_nombre = substr($apellido1 ,0,3) . substr($nombre ,0,2);
        $sw_apellido = substr($apellido2,0,3) . substr($ciudad,0,3);
        $sw_nombre = ucfirst(strtolower($sw_nombre));
        $sw_apellido=ucfirst(strtolower($sw_apellido));
        
        
        
        echo "Mi nombre con subcadenas es: " . substr($nombre, 0, 3)."<br>";

        //Partimos con el explode
        print_r($partes);
        echo "<br>";

        // Mostramos el implode
        echo "Cadena unida con implode: " . $cadena . "<br>";


        echo "<p>Tu nombre de Star Wars es: <strong>$sw_nombre $sw_apellido</strong></p>";
        ?>

        


    </section>

</body>
</html>

        








