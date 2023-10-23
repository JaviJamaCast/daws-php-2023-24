<?php
$numero = $_GET["num"];

function esPar($numero)
{
    $total = 0;
    for ($i = 0; $i <= $numero; $i++) {

        if ($i % 2 == 0) {
            $total = $total + $i;
            echo  "$total\n";
        }
    }
}
require "index.view.php";
