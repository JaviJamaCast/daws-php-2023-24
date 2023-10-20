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

    echo " La multiplicacion da un total de: " . mutiplicar($num1, $num2);


    function mutiplicar($num1, $num2): int
    {
        return $num1 * $num2;
    }

    ?>

</body>

</html>