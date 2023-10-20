<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $cadena1 = $_GET["c1"];
    $cadena2 = $_GET["c2"];
    // Cambie el return simplificando el codigo

    function mensaje($cadena1, $cadena2): string
    {
        $resultado = "{$cadena1} {$cadena2} ";
        return $resultado;
    }
    echo "La cadena concatenada es: " . mensaje($cadena1, $cadena2);
    ?>

</body>

</html>