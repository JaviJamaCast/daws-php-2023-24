<?php

$ciudades = array('Paris', 'Berlin', 'Amsterdam', 'Praga');

$posicion = $_GET['pos'];
$valor = "Bogota";
function getValor($array, $posicion)
{
    return $array[$posicion];
}
function setValor($array, $posicion, $valor)
{
    $array[$posicion] = $valor;
    return $array;
}

echo getValor($ciudades, $posicion)."<br>";
echo var_export(setValor($ciudades, $posicion, $valor));
require "index.view.php";
