<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $numero = $_GET["a"];
    // Cambie el return simplificando el codigo
    
    function cuadrado($numero)
    {
        return "$numero al cuadrado es: " .  $numero * $numero;
    }
    echo cuadrado($numero);

    ?>

</body>

</html>