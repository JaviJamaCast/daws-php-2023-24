<?php
$num1 = $_GET["a"];
$num2 = $_GET["b"];


operacion($num1, $num2);
function operacion($num1, $num2)
{
    if ($num1 != $num2) {
        echo "La suma es: " . $num1 + $num2;
    } else if ($num1 == $num2) {
        echo "La multiplicacion es: " . $num2 * $num1;
    }
}
require "index.view.php";
