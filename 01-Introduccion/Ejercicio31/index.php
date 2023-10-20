<?php


$numeros = [];
for ($i = 0; $i < 20; $i++) {
    array_push(
        $numeros,
        random_int(1, 999)
    );
}
$numMayor = 0;
$numMenor = 1000;
$cadena = implode(', ', $numeros);

// Mostrar la cadena
echo "El array generado es: " . $cadena . "<br>";
foreach ($numeros as $value) {
    if ($numMayor < $value) {
        $numMayor = $value;
    } else if ($numMenor > $value) {
        $numMenor = $value;
    }
}
echo "El valor mas alto es: $numMayor <br>";
echo "El valor mas bajo es: $numMenor";
/*Se puede simplificar con min($numeros) y max($numeros) */
require "index.view.php";
