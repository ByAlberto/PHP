    <title>Ejercicios PHP: Constantes</title>
</head>
<body>

    <h1>Ejercicios sobre constantes (predefinidas, mágicas y definición)</h1>

    <p>Implementa las soluciones en este mismo archivo dentro de las secciones PHP indicadas. Cada sección contiene enunciados y sugerencias para experimentar.</p>

    <section>
        <h2>Ejercicio 1 — Constantes predefinidas</h2>
        <p>PHP incluye muchas constantes predefinidas útiles. Muestra el valor y explica brevemente cada una de las siguientes constantes:</p>
        <ul>
            <li>Versión de PHP</li>
            <li>Sistema operativo</li>
            <li>Separador de directorios</li>
        </ul>
        <p>Además, usa <code>defined()</code> para comprobar si una constante predefinida existe antes de mostrarla.</p>

        <?php
            if (defined('PHP_VERSION')) {
                echo "la constante PHP_VERSION existe";
            } else {
                echo "la constante PHP_VERSION no existe";
            }

            if (defined('PHP_OS')) {
                echo "la constante PHP_OS existe";
            } else {
                echo "la constante PHP_OS no existe"; 
            }

            if (defined('__FILE__')) {
                echo "la constante __FILE__ existe";
            } else {
                echo "la constante __FILE__ no existe";
            }
        ?>

    </section>

    <section>
        <h2>Ejercicio 2 — Constantes "mágicas"</h2>
        <p>Las constantes mágicas cambian según el contexto (archivo, línea, clase, método...). Muestra el valor de estas constantes dentro del archivo y explica su comportamiento:</p>
        <ul>
            <li>Fichero actual</li>
            <li>Directorio actual</li>
            <li>Número de línea actual</li>
        </ul>

        <?php
        // EJERCICIO 2
        ?>

    </section>

    <section>
        <h2>Ejercicio 3 — Definir tus propias constantes (define y const)</h2>
        <p>Practica la creación de constantes con <code>define()</code> y con <code>const</code> dentro y fuera de clases. En particular:</p>
        <ul>
            <li>Define una constante global usando <code>define</code> y muéstrala.</li>
            <li>Intenta redefinir una constante y observa el comportamiento.</li>
            <li>Comprueba la diferencia entre constantes y variables (inmutabilidad).</li>
        </ul>

        <?php
            define("PI", 3.14159);
            define("PI", 3.14156);

            echo "El valor de PI es: " . PI;

        ?>

        <p>LA DIFERENCIA QUE HAY ENTRE CONSTANTES Y VARIABLES ES QUE LAS CONSTANTES NO SE PUEDEN VOLVER A DEFINIR SIN EMBARGO LAS VARIABLES PUEDES VOLVER A DEFINIRLAS</p>

    </section>
            
</body>
</html>