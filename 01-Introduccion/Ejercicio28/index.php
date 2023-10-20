<?php
$coches = ["Audi", "Seat", "Mercedes", "Volkswagen ", "BMW", "Fiat"];

foreach ($coches as $coche) {
    echo "<li>$coche</li>";
}

require "index.view.php";
