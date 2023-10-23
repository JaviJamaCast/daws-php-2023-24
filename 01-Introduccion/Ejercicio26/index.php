<?php
$coches = ["Audi", "Seat", "Mercedes", "Volkswagen ", "BMW", "Fiat"];

function mostrarConIdConDoWhile($coches)
{
    $x = 0;

    do {
        echo "<li id='$x'>$coches[$x]</li>";
        $x++;
    } while ($x < count($coches));
}



require "index.view.php";
