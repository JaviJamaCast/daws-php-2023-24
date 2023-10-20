<?php
$numero = $_GET["num"];
$total = 0;
for ($i = 0; $i <= $numero; $i++) {
    $total = $total + $i;
    echo  "$total\n";
}
require "index.view.php";
