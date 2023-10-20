<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $num1 = $_GET["a"];
    $num2 = $_GET["b"];

    $resta = $num1 - $num2;
    $division = $num1 / $num2;

    if (esMayor($num1, $num2)) {
        echo "$num1 es mayor que $num2\n <br>
        La resta de los numeros es: $resta \n <br>
        La division es: $division
        ";
    } else {
        echo "$num1 es menor que $num2\n <br>
        La resta de los numeros es: $resta \n <br>
        La division es: $division
        ";
    }


    function esMayor($num1, $num2): bool
    {
        if ($num1 > $num2) {
            return true;
        } else {
            return false;
        }
    }

    ?>

</body>

</html>