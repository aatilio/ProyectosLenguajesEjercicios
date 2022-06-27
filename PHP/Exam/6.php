<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $opc = $_POST['opc'];
    switch ($opc) {
        case 1:
            echo "<h3 >Suma</h3>";
            echo "La suma de los numeros es: " . $n1 + $n2;
            break;
        case 2:
            echo "<h3 >Resta</h3>";
            echo "La resta de los numeros es: " . $n1 - $n2;
            break;
        case 3:
            echo "<h3 >Multiplicacion</h3>";
            echo "El producto de los numeros es: " . $n1 * $n2;
            break;
        case 4:
            echo "<h3 >Divicion</h3>";
            echo "La divicion de los numeros es: " . $n1 / $n2;
            break;
        default:
            echo "Ocurrio un error en el transcurzo...";
            break;
    }
    ?>
</body>

</html>