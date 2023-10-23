<?php
$coches = ["Audi", "Seat", "Mercedes", "Volkswagen ", "BMW", "Fiat"];


function mostrarConForEach($coches)
{
    foreach ($coches as $coche) {
        echo "<li>$coche</li>";
    }
}


require "index.view.php";
