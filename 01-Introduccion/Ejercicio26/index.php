<?php
$coches = ["Audi", "Seat", "Mercedes", "Volkswagen ", "BMW", "Fiat"];
$x = 0;

do {
    echo "<li id='$x'>$coches[$x]</li>";
    $x++;
} while ($x < count($coches));



require "index.view.php";
