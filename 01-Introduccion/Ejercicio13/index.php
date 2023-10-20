<?php

$animales = array('Perro', 'Gato', 'Lobo', 'Leon');
$colores = array('Azul', 'Verde', 'Negro', 'Rojo');
echo var_export($animales) . "<br>";
echo var_export($colores) . "<br>";
echo "El total de animales es: " . count($animales) . "<br>";
echo "El total de colores es: " . count($colores). "<br>";

agregarAnimal($animales);
agregarColor($colores);

$animalesYcolores = array_merge($animales, $colores);
echo var_export($animalesYcolores) . "<br>";
function agregarAnimal($array)
{
    array_push($array, "Raton");
    echo var_export($array). "<br>";
}

function agregarColor($array)
{
    array_unshift($array, "Morado");
    echo var_export($array). "<br>" ;
}
require "index.view.php";
?>