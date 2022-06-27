<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // si formulario no se envio lo muestra
    if (!isset($_POST['btnEnvia'])) {
    ?>
        <form method="post" action="redondeo.php">
            <p> <b>Digite un Numero con decimales</b> </p>
            <input type="text" name="num" size="3" />
            <input type="submit" name="btnEnvia" value="Calcular" />
        <?php
        // si formulario se envio procesar datos de entrada 
    } else {

        $num = $_POST['num'];

        if ($num > 0  ) {
            $red__ = ceil($num);
            $red_ = floor($num);
            echo "El numero " . $num . " redondeado hacia arriba: " . $red__;
            echo "<br>El numero " . $num . " redondeado hacia abajo: " . $red_;
        } else {
            echo "el numero esta fuera de rango espesificado";
        }
    }
        ?>
</body>

</html>