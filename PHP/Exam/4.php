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
        <form method="post" action="4.php">
            <p> <b>Formulario</b> </p>
            <label for="">Ingrese el nombre del producto </label>
            <input type="text" name="n" size="15" /><br>
            <label for="">Ingrese la cantidad de productos </label>
            <input type="text" name="c" size="3" /><br>
            <label for="">Ingrese el precio por unidad </label>
            <input type="text" name="p" size="3" /><br>
            <br><input type="submit" name="btnEnvia" value="Calcular " />
        <?php
        // si formulario se envio procesar datos de entrada 
    } else {
        $nam  = $_POST['n'];
        $cantidad = $_POST['c'];
        $precio  = $_POST['p'];
        $coste = $cantidad * $precio;
        $igv =  $coste * (19 / 100);;

        echo "<b>Detalles</b>";
        echo "<br>Nombre del producto: " . $nam;
        echo "<br>Importe total es: " . $coste;
        echo "<br>IGV: " . $igv;
        echo "<br>Total a pagar es: " . $coste + $igv;
    }
        ?>
</body>

</html>