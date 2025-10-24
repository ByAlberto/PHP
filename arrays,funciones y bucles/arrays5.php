<?php
$matriz =array(
    [1, 2, 3],
    [6, 5, 4],
    [7, 8, 9],
);

$determinante = 

($matriz  [0][0] * [1][1] * [2][2])+
($matriz [1][0] * [2][1] * [0][2])+
($matriz [0][1] * [1][2] * [2][0])-
($matriz [0][2] * [1][1] * [2][0])-
($matriz [0][1] * [1][0] * [2][2])-
($matriz [1][2] * [2][1] * [0][0]);

echo "La matriz aqui seria  $determinante";

?>