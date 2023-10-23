<?php

$cadena1 = $_GET["c1"];

function mensaje($cadena1, $cadena2 = 'javier jamaica')
{
    $resultado = "{$cadena1} {$cadena2} ";
    echo "La cadena concatenada es: $resultado";
}

require "index.view.php";
