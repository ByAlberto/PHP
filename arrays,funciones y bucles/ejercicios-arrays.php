<!doctype html>
<head>
    <title>Ejercicios PHP: Arrays</title>
</head>
<body>

    <h1>Ejercicios sobre arrays en PHP</h1>

    <p>Implementa las soluciones en este mismo archivo dentro de las secciones PHP indicadas.</p>

    <section>
        <h2>Ejercicio 1 — Arrays Indexados</h2>
        <p>Trabaja con arrays indexados realizando las siguientes operaciones:</p>
        <ul>
            <li>Crea un array con los días de la semana y muestra el tercer día.</li>
            <li>Añade un nuevo elemento al final del array usando <code>array_push()</code>.</li>
            <li>Elimina el último elemento usando <code>array_pop()</code> y muéstralo.</li>
            <li>Cuenta el número de elementos en el array.</li>
            <li>Busca si existe un elemento específico en el array usando <code>in_array()</code>.</li>
        </ul>

        <?php
            $dias = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
            $anadir = array_push($dias, "Sabamingo");
            $eliminar = array_pop($dias);



            echo "el dia es " . $dias[2] . "<br>";
            echo "ahora el array tiene " . $anadir . "cosas <br>";
            print_r($dias) . "<br>";

            if(in_array("Miercoles", $dias)) {
                echo "Miercoles esta en la lista";
            } else {
                echo "no esta";
            }


        ?>

    </section>

    <section>
        <h2>Ejercicio 2 — Arrays Asociativos</h2>
        <p>Trabaja con arrays asociativos realizando las siguientes operaciones:</p>
        <ul>
            <li>Crea un array asociativo con datos de una persona (nombre, edad, ciudad, profesión).</li>
            <li>Añade un nuevo par clave-valor al array.</li>
            <li>Comprueba si existe una clave específica usando <code>array_key_exists()</code>.</li>
            <li>Obtén todas las claves del array usando <code>array_keys()</code>.</li>
            <li>Obtén todos los valores del array usando <code>array_values()</code>.</li>
        </ul>

        <?php
            $personas = [
                [
                    "nombre" => "Francisco",
                    "edad" => 28,
                    "ciudad" => "Madrid",
                    "Profesion" => "Ingeniero",
                    "estadoCivil" => "Casado"
                ],

                [
                    "nombre" => "Alberto",
                    "edad" => 25,
                    "ciudad" => "Murcia",
                    "Profesion" => "Futbolista",
                    "estadoCivil" => "Soltero"
                ],

                [
                    "nombre" => "Manuel",
                    "edad" => 30,
                    "ciudad" => "Huelva",
                    "Profesion" => "Albañil",
                    "estadoCivil" => "Divorciado"
                ]

            ];
            foreach ($personas as $persona) {
                if (array_key_exists("nombre", $persona)) {
                echo "La clave nombre existe para " . $persona['nombre'] . "<br>";
            }

            $claves = array_keys($personas);

           echo nl2br (print_r ($claves));
           

           $valores = array_values($personas);

           print_r($valores);
        }

        ?>

    </section>

    <section>
        <h2>Ejercicio 3 — Operaciones con Arrays</h2>
        <p>Realiza las siguientes operaciones con arrays:</p>
        <ul>
            <li>Crea dos arrays y combínalos usando <code>array_merge()</code>.</li>
            <li>Ordena un array numéricamente usando <code>sort()</code> y <code>rsort()</code> (orden ascendente y descendente).</li>
            <li>Ordena un array asociativo por valor usando <code>asort()</code> y <code>arsort()</code>.</li>
            <li>Ordena un array asociativo por clave usando <code>ksort()</code> y <code>krsort()</code>.</li>
        </ul>

        <?php
            $animales = [
                [
                    "nombre" => "Tobi",
                    "raza" => "Labrador",
                    "edad" => 4,
                    "genero" => "Masculino"
                ],

                [
                    "nombre" => "Soka",
                    "raza" => "Bordier Colliere",
                    "edad" => 2,
                    "genero" => "Femenino"
                ],

                [
                    "nombre" => "Ares",
                    "raza" => "San Bernardo",
                    "edad" => 9,
                    "genero" => "Masculino"
                ]
            ];

            
            echo "<h3>Combinacion de arrays (array:_merge)</h3>";
            $combinado = array_merge($personas, $animales);
            echo nl2br (print_r($combinado));

            echo "<h3>Ordenacion de array ascendente (sort)</h3>";
            sort($animales);
            echo nl2br (print_r($animales));

            echo "<h3>Ordenacion de array descendete (rsort)</h3>";
            rsort($animales);
            echo nl2br(print_r($animales));

            echo "<h3>Orden un array (asort)</h3>";
            asort($animales);
            echo nl2br(print_r($animales));

            echo "<h3>Ordena el array (arsort)</h3>";
            arsort($animales);
            echo nl2br(print_r($animales));

            echo "<h3>Ordena el array por sus claves (ksort)</h3>";
            ksort($animales);
            echo nl2br(print_r($animales));

            echo "<h3>Ordena el array con (krsort)</h3>";
            krsort($animales);
            echo nl2br(print_r($animales));


        ?>

    </section>

    <section>
        <h2>Ejercicio 4 — Arrays Multidimensionales</h2>
        <p>Trabaja con arrays multidimensionales:</p>
        <ul>
            <li>Crea un array multidimensional que represente una agenda de contactos con nombres, teléfonos y emails.</li>
            <li>Añade un nuevo contacto a la agenda.</li>
            <li>Modifica el teléfono de uno de los contactos.</li>
        </ul>

        <?php
        $agendas = [
            [
                "nombre" => "Alberto",
                "telefono" => 601315538,
                "email" => "albertotiti9@gmail.com"
            ],

            [
                "nombre" => "Francisco",
                "telefono" => 615079697,
                "email" => "franchesco69@gmail.com"
            ],

            [
                "nombre" => "Manuel",
                "telefono" => 601054374,
                "email" => "manuelcorredorsolitario@gmail.com"
            ]
        ];

            $direcciones = ["Calle Goya 4", "Calle Juan Jose Ayala Aroca 5", "Avenida Gran via 3"];

                
            foreach ($agendas as $i => $agenda) {
                    $agendas[$i]["direccion"] = $direcciones[$i];
                }

                print_r($agendas);
                
                echo "<br><br>";

                $agendas[2]["email"] = "manuelcorredorconnovia@gmail.com";

                print_r($agendas);



        ?>

    </section>

</body>
</html>