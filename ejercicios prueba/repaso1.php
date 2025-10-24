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
        $nombre = "perico";
        $apellido = "palotes";
        $ciudad = "vigo";
        $apellido2 = "takumi";
        $fecha = "1982";

        echo $nombre . $apellido . $ciudad . "<br>";
        echo $nombre , $apellido , $ciudad , "<br>";
        echo "$nombre $apellido $ciudad" ;
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
            $cadena = "Manolo se la come a Fran";
            $longitud = strlen($cadena);
            



            echo $longitud . "<br>";
            echo strtoupper($cadena) . "<br>";
            echo strtolower($cadena) . "<br>";
            echo trim($cadena, "Man");
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
        
            echo strpos($cadena, "l") . "<br>";
            echo str_contains($cadena, "pene");

            echo str_replace("come" , "chupa", $cadena) . "<br>";
            echo str_ireplace(["m" , "f"] , "**", $cadena) . "<br>";
            echo $contrasenia = str_ireplace(
                ["a", "e", "i", "o", "u"],
                ["@", "€", "!", "0", "^"],
                $nombre . $fecha
            );
            
                
            
            

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
        $frase = "Hola me llamo Manolo y mido menos de 1.40";
        $extraer = substr ($frase , 7, 5);
        $separar = explode (" " , $frase);
        $juntar = implode (" ", $separar);
        $juntar1 = str_split($frase);
         $sw_nombre = substr($apellido, 0, 3) . substr($nombre, 0, 2);
         $sw_apellido = substr($apellido2, 0, 3) . substr($ciudad, 0, 3);

        echo $extraer , "<br>";
        echo $separar[6];
        echo $juntar , "<br>";
        echo $juntar1[34];
        echo "<br>" . $sw_nombre_star = (ucfirst(strtolower($sw_nombre)) .  ucfirst(strtolower($sw_apellido))) ;

        
        

       

        ?>

    </section>

</body>
</html>
