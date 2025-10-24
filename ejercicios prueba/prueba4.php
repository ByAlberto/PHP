<!doctype html>
<head>
    <title>Ejercicios PHP: Tipos de datos y casting</title>
</head>
<body>

    <h1>Ejercicios sobre tipos de datos y casting (PHP)</h1>

    <p>Cada ejercicio incluye solo el enunciado. Implementa las soluciones en este mismo archivo dentro de las secciones PHP indicadas.</p>

    <section>
        <h2>Ejercicio 1 — Identificar tipos</h2>
        <p>Define varias variables con distintos tipos de datos y muestra su tipo y valor. Debes crear al menos las siguientes variables:</p>
        <ul>
            <li>Una cadena de texto (string).</li>
            <li>Un entero (int).</li>
            <li>Un número de punto flotante (float).</li>
            <li>Un booleano (bool) con valor true y otro con false.</li>
        </ul>
        <p>Para cada variable, muestra su nombre, su tipo y su valor usando funciones de inspección de PHP (p. ej. gettype(), var_dump()).</p>

        <?php
            $cadenaTexto = "Hola me siento empodera";
            $entero = 69;
            $float = 5.69;
            $verdadero = true;
            $falso = false;
            
            
        ?>

         <p> Tipo: <?= gettype($cadenaTexto) ?> : valor: <?= $cadenaTexto?></p>
         <p> Tipo: <?= gettype($entero) ?> :valor : <?= $entero?></p>
         <p> Tipo: <?= gettype($float) ?> :valor : <?= $float?></p>
         <p> Tipo: <?= gettype($verdadero) ?> : valor : <?= $verdadero?></p>
         <P> Tipo: <?= gettype($falso) ?> :valor : <?= $falso?></p>

    </section>

    <section>
        <h2>Ejercicio 2 — Casting básico</h2>
        <p>Realiza conversiones (castings) entre cadenas y números y observa los resultados. Prueba al menos las siguientes conversiones:</p>
        <ul>
            <li>La cadena "123" a int.</li>
            <li>La cadena "123abc" a int.</li>
            <li>La cadena "abc123" a int.</li>
            <li>El número 45.67 a int y a string.</li>
            <li>La cadena "0" a bool (indica qué resultado esperas y por qué).</li>
            <li>La cadena vacía "" a bool.</li>
        </ul>
        <p>Muestra el resultado de cada casting junto con el tipo resultante.</p>

        <?php
        //CREACION DE LAS CADENAS
        $cadena = "123";
        $cadena1 = "123abc";
        $cadena2 = "abc123";
        $cadenaDouble = 45.67;
        $cadena3 = "0";
        $cadena4 = "";

        //LA CONVERSION DE LAS CADENAS
        $comoEntero = (int) $cadena;
        $comoEntero1 = (int) $cadena1;
        $comoEntero2 = (int) $cadena2;
        $comoEntero3 = (int) $cadenaDouble;
        $comoString = (String) $cadenaDouble;
        $comoBoolean = (bool) $cadena3;
        $comoBoolean1 = (bool) $cadena4;

        ?>
        <p>Esta cadena en numero entero seria: <?=$comoEntero?></p>

        <p>Esta cadena en numero entero seria: <?=$comoEntero1?></p>

        <p>Esta cadena en numero entero seria: <?=$comoEntero2?></p>

        <p>Esta cadena en numero entero seria: <?=$comoEntero3?></p>

        <p>Esta cadena en String seria: <?=$comoString?></p>

        <p>Esta cadena de booleano seria: <?=$comoBoolean?></p>

        <p>Esta cadena de booleano seria: <?=$comoBoolean1?></p>


    </section>


    <section>
        <h2>Ejercicio 3 — Cast entre booleanos y números</h2>
        <p>Comprueba cómo se convierten los booleanos en números y cómo se interpretan diversos números como booleanos. Realiza y muestra estas conversiones:</p>
        <ul>
            <li>true a int y false a int.</li>
            <li>1, 0 y 2 a bool (explica por qué cada uno da true o false).</li>
        </ul>
        <p>Incluye la inspección de tipo y valor para cada conversión.</p>

        <?php
        
        //DATOS DEL EJERCICIO
        $verdadero = true;
        $falso = false;
        $numero = 1;
        $numero1 = 0;
        $numero2 = 2;


        //COGEMOS Y HACEMOS LA CONVERSION
        $verdaderoInt = (int) $verdadero;
        $falsoInt = (int) $falso;
        $numeroBool = (bool) $numero;
        $numeroBool1 = (bool) $numero1;
        $numeroBool2 = (bool) $numero2;
        ?>


        <p>Tipo: <?= gettype($verdaderoInt)?> valor: <?= $verdaderoInt?></p>

        <p>Tipo: <?= gettype($falsoInt)?> valor: <?= $falsoInt?></p>

        <!-- Este valor dara verdadero porque no es 0, algo que no sea 0 dara siempre true -->
        <p>Tipo: <?= gettype($numeroBool)?> valor: <?= $numeroBool?></p>
        
        <!-- Sin embargo este da false porque el resultado es 0 y siempre que da 0 sera false -->
        <p>Tipo: <?= gettype($numeroBool1)?> valor: <?= $numeroBool1?></p>

        <!-- Este que es 2 dara true, porque como hemos dicho antes al no ser valor 0 siempre dara true -->
        <p>Tipo: <?= gettype($numeroBool2)?> valor: <?= $numeroBool2?></p>

    </section>

</body>
</html>