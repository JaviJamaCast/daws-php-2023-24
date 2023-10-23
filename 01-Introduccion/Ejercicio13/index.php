<?php

$animales = array('Perro', 'Gato', 'Lobo', 'Leon');
$colores = array('Azul', 'Verde', 'Negro', 'Rojo');


$animalesYcolores = array_merge($animales, $colores);

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
