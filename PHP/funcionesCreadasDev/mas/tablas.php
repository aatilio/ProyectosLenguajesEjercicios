<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <?php
    //funcion para poder hacer una tabla de multiplicacion hasta el 12 de un numero x
    function TablaProducto($num)
    {
        echo "<hr>Tabla de multiplicar del $num <br><br> ";
        for ($x = 0; $x <= 12; $x++) {
            $res = $x * $num;
            echo "$x por $num es igual: $res <br>";
        }
    }
        //funcion para poder hacer una tabla de suma hasta el 12 de un numero x
    function TablaSuma($num)
    {
        echo "<hr>Tabla de la suma del $num <br><br> ";
        for ($x = 0; $x <= 12; $x++) {
            $res = $x + $num;
            echo "$x más $num es igual: $res <br>";
        }
    }
    //asignacion de una variable es estas funciones
    TablaProducto(4);
    TablaProducto(8);
    TablaSuma(14);
    TablaSuma(9);
    ?>
</body>

</html>