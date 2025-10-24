<?php
$anio = $_GET['anio'];

    if (($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == )) {
    echo "$anio es un año bisiesto";
} else {
    echo "$anio no es bisiesto";
}
?>