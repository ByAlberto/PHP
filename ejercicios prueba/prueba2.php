<!doctype html>
<head>
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
            echo '<p>Existe: ', var_dump(defined('PHP_VERSION')), '</p>';
            echo '<p>Versión de PHP: ', PHP_VERSION, '</p>';

            echo '<p>Existe: ', var_dump(defined('PHP_OS')), '</p>';
            echo '<p>Sistema operativo: ', PHP_OS, '</p>';

            echo '<p>Existe: ', var_dump(defined('DIRECTORY_SEPARATOR')), '</p>';
            echo '<p>Separador de directorios: ', DIRECTORY_SEPARATOR, '</p>';
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
        //Esta Constante te muestra donde se encuentra el fichero actual
        echo "Archivo Actual: " . __FILE__ . "<br>"; 

        //Y este te muestra el directorio actual
        echo "Directorio actual: " . __DIR__ . "<br>";

        //Aqui mostramos en la linea en la que nos encontramos
        echo "Linea actual: " .__LINE__ . "<br>";
        ?>

    </section>


    <section>
        <h2>Ejercicio 3 — Definir tus propias constantes (define y const)</h2>
        <p>Practica la creación de constantes con <code>define()</code> y con <code>const</code> dentro y fuera de clases. En particular:</p>
        <ul>
            <li>Define una constante global usando <code>define</code> y muéstrala.</li>
            <li>Define otra constante usando <code>const</code> dentro de una clase y accede a ella.</li>
            <li>Intenta redefinir una constante y observa el comportamiento.</li>
            <li>Comprueba la diferencia entre constantes y variables (inmutabilidad).</li>
        </ul>

        <?php
        define("MI_CONSTANTE",0.21);
        define("MI_CONSTANTE", 0,10);
        class MiClase {
        // Definición de constante dentro de la clase
        const SALUDO = "Hola desde la constante de clase";
        
}
        $mivariable = 100;
        $mivariable = 300;

        //Esta constante esta hecha con define
        echo "La tasa del IVA es de:  " . MI_CONSTANTE. "<br>";

        //Esta constante esta creada con class y const
        echo "Mensaje de la Constante: " . MiClase::SALUDO . "<br>";

        //Mi variable actual
        echo "Este es el valor de mi variable actual: " . $mivariable . "<br>";
        
        
        //Mi variable despues
        echo "Este es el valor de mi variable despues: " . $mivariable . "<br>"; 


        //La diferencia esta en que las constantes por mucho que quieras cuando se definen ya no se pueden modificar pero sin embargo las variables puedes cambiarlas cuantas veces quieras. 
        ?>




    </section>