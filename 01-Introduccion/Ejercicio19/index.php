<?php
$numero = $_GET["num"];


function mostrarN($numero)
{
    $nTotal = 0;
    for ($i = 0; $i <= $numero; $i++) {
        $nTotal = $nTotal + $i;
        echo  "$nTotal\n";
    }
}


require "index.view.php";
