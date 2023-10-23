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


require "index.view.php";
