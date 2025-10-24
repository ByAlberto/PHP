<!doctype html>
<head>
    <title>Ejercicios PHP: Operaciones</title>
</head>
<body>

    <h1>Ejercicios sobre operaciones (aritméticas, comparación y lógicas)</h1>

    <p>Cada ejercicio incluye solo el enunciado. Implementa las soluciones en este mismo archivo dentro de las secciones PHP indicadas.</p>

    <section>
        <h2>Ejercicio 1 — Operaciones aritméticas</h2>
        <p>Declara dos variables numéricas y realiza las siguientes operaciones, mostrando el resultado y el tipo:</p>
        <ul>
            <li>Suma</li>
            <li>Resta</li>
            <li>Multiplicación</li>
            <li>División</li>
            <li>Resto (módulo)</li>
            <li>Potencia (usar **)</li>
        </ul>
        <p>Muestra además una operación con mezcla de int/float y observa el tipo resultante.</p>
        <p>Haz una operación de conversión de temperatura. Declara una variable para la temperatura en grados Celsius y conviértela a Fahrenheit y a Kelvin.</p>

        <?php
             $a = 10;
             $b = 2;

             $c = 10;
             $d = 5.5;

             $temperaturaCelsius = 35;

             //Suma
             echo "la suma da " . $a + $b . "<br>";
             
            //Resta
             echo "la resta da " . $a - $b . "<br>";

            //Multiplicación
            echo "la multiplicacion da " . $a * $b . "<br>";

            //division
            echo "la division da " . $a / $b . "<br>";

            //Resto
            echo "el resto de la division da " . $a / $b . "<br>";

            //Potencia
            echo "la potencia da " . $a ** $b . "<br>";

            //Operación mezclando enteros con decimales
            echo "el resultado de la operacion de enteros con decimales es " . $c / $d . "<br>";


            //Pasamos de Celsius a Fahrenheit
            echo "la temperatura en grados Fahrenheit es " . ($temperaturaCelsius * 9/5) + 32 .   "<br>";

            //Pasamos de Celsius a Kelvin
            echo "la temperatura en grados Kelvin es " . $temperaturaCelsius + 273.15 . "<br";

        ?>

         <section>
        <h2>Ejercicio 2 — Operadores de comparación</h2>
        <p>Usa distintos operadores de comparación entre varias parejas de valores y muestra el resultado (true/false) y una explicación breve:</p>
        <ul>
            <li>== y === entre "123" y 123</li>
            <li>!= y !== entre 0 y false</li>
            <li>>, &lt;, &gt;=, &lt;= entre números</li>
            <li>Comparación entre arrays con == y === (explica la diferencia)</li>
        </ul>

        <?php
        $a = "123";
        $b = 123;
        $c = 0;
        $d = false;
        $menor_que= $a < $b;
        $mayor_igualque= $a >= $b;
        $menor_igualque= $a <= $b;
        $array1 = [0,2,4];
        $array2 = [1,3,5];
        // == Es de igualdad y compara los valores mientras que === es de identidad que compara valores y tipos 
        ?>

        <p>Esta operacion da: <?= $a == $b ?> por tanto es verdadero</p>
        <p>Esta operacion da: <?= $a === $b ?> por tanto es falso</p>

        
        <p>Esta operacion da: <?= $c != $d ?> por tanto es falso</p>
        <p>Esta operacion da: <?= $c !== $d ?> por tanto es verdadero</p>

        <p><?=$menor_que?>Aqui uso los numeros del primer ejercicio para decir menor que</p>
        <p><?=$mayor_igualque?>Aqui uso los numeros del primer ejercicio para decir mayor igual que</p>
        <p><?=$menor_igualque?>Aqui uso los numeros del primer ejercicio para decir menor igual que solo que se diferencia con el primero que si los numeros son iguales da verdadero</p>
        <p>Aqui comparamos los dos Arrays con sus valores<?=$array1 == $array2?></p>
        <p>Aqui comparamos los dos Arrays con sus valores y tipos <?=$array1 === $array2?></p>
        </section>

        <section>
        <h2>Ejercicio 3 — Operadores lógicos</h2>
        <p>Comprueba combinaciones de expresiones booleanas usando AND, OR, XOR y NOT (&&, ||, xor, !). Para cada combinación, muestra la expresión, su valor y una breve explicación del porqué.</p>
        <ul>
            <li>(true && false)</li>
            <li>(true || false)</li>
            <li>(true xor true)</li>
            <li>!false</li>
            <li>Combina condiciones con parentesis para mostrar precedencia (por ejemplo: true || false && false)</li>
        </ul>

        <?php
            $numerin1 = 23;
            $numerin2 = 27;
            $and = ($numerin1 > 10) && ($numerin2 > 50);
            $or = ($numerin1 > 23) || ($numerin2 < 30);
            $xor = ($numerin1 < 23) xor ($numerin2 > 10);
            $not = $numerin1 != 23;
            $combi = ($numerin1 == 23) || ($numerin2 > 30) && ($numerin2 > 50)
        ?>

        <p><?=$and?>Este no se cumple porque 27 no es mayor que 50</p>
        <p><?=$or?>Este si se cumple porque una de los condiciones es verdadera</p>
        <p><?=$xor?>Este no se cumple porque las dos son verdaderas</p>
        <p><?=$not?>Este no se cumple porque es verdadera </p>
        <p><?=$combi?>Aqui lo da por bueno porque con dar una ya da verdadero</p>

    </section>

    <section>
        <h2>Ejercicio 4 — Mini-retos</h2>
        <p>Resuelve los siguientes mini-retos y muestra cómo los resolverías en PHP:</p>
        <ol>
            <li>Intercambia los valores de dos variables sin usar una tercera variable (usa operadores aritméticos o bit a bit).</li>
            <li>Comprueba si un número es par o impar usando operadores (sin usar funciones).</li>
            <li>Evalúa si una variable está entre dos valores (inclusive) usando operadores de comparación y lógicos.</li>
        </ol>

        <?php
            $numerin1 = $numerin1 + $numerin2;
            $numero = 7;
            $numero = 15;
            $min = 10;
            $max = 20;

        if ($numero % 2 == 0) {
        echo "El número $numero es par.";
        } else {
        echo "El número $numero es impar." ;
        }

        if ($numero >= $min && $numero <= $max) {
    echo "El número $numero está entre $min y $max (inclusive).";
} else {
    echo "El número $numero NO está entre $min y $max.";
}
?>

        
        
    </section>
