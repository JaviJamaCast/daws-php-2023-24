<?php
$numero = $_GET["num"];
$total = 0;
$numeroAntes = 0;

for ($i = 0; $i <= $numero; $i++) {


    $total = $total + $i;
    echo  "$total \n";
   
    if ($total > 100 && $numeroAntes === 0) {
        $numeroAntes = $total - $i;
    }
}
 if ($numeroAntes === 0) {
    echo "<br> El total no llego a ser mayor que 100";
} else {
    echo "<br> El numero antes de que el total llegara a 100: $numeroAntes";
} 
require "index.view.php";
