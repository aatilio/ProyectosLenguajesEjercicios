<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <?php
    $datos = getdate();
    foreach ($datos as $clave => $valor) {
        echo $clave . ": " . $valor . "<br>";
    }
    echo "<hr>";
    echo "Hoy es: " . $datos['mday'] . 
    " de " . $datos['mon'] . 
    " del " . $datos['year'];
    ?>
</body>

</html>