<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
echo var_export($animales) . "<br>";
echo var_export($colores) . "<br>";
echo "El total de animales es: " . count($animales) . "<br>";
echo "El total de colores es: " . count($colores) . "<br>";
agregarAnimal($animales);
agregarColor($colores);
echo var_export($animalesYcolores) . "<br>";
?>

<body>
</body>

</html>