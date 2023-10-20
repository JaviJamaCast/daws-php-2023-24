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

    // Cambie el return simplificando el codigo

    function mensaje($cadena1, $cadena2 = 'javier jamaica')
    {
        $resultado = "{$cadena1} {$cadena2} ";
        echo "La cadena concatenada es: $resultado";
    }
    mensaje($cadena1);
    ?>

</body>

</html>