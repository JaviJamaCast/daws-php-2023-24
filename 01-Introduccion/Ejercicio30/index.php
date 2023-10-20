<?php

$estudiantes = array(
    'Roberto' => 4.1,
    'Francisco' => 1.1,
    'Alex' => 2.4,
    'Brayan' => 3.3,
    'Kevin' => 4.1,
    'Nicolas' => 4.9,

);

foreach ($estudiantes as $key => $value) {
    echo "La nota media de {$key} es {$value} </br>";
}

require "index.view.php";
