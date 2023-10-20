<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $numero1 = $_GET["a"];

    $numero2 = $_GET["b"];
    // Cambie el return simplificando el codigo

    function esMayor($numero1, $numero2): bool
    {
        return $numero1 > $numero2 ?  true : false;
    }
    echo  "$numero1 es mayor que $numero2? ";
    echo var_export(esMayor($numero1, $numero2));

    ?>

</body>

</html>