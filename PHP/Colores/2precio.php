<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sueldos</title>
</head>

<body>
    <?php
        $unidades = $_GET['unidades'];
        $precio = $_GET['precio'];
        $total = $unidades * $precio;
        $igv = $total * 0.18;
        $sinigv = $total - $igv;

        echo "Importe parcial: ". $sinigv;
        echo "<br>Importe IGV: ". $igv;
        echo "<br>Importe total: ". $total;
    ?>
</body>

</html>