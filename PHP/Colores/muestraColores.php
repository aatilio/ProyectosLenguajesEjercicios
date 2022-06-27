<!DOCTYPE html>
<html>

<head>
    <title> Muestrario Interactivo... </title>
</head>

<body>
    <h2> Color RGB Seleccionado... </h2>
    <?php
        // Obtener datos de entrada
        $r=$_GET["r"];
        $g=$_GET["g"];
        $b=$_GET["b"];
        // Gererar variable cadena de Color
        $rgb = $r . ',' . $g . ',' . $b;
        ?>
            <p>
                R: <?php echo $r; ?>
                G: <?php echo $g; ?>
                B: <?php echo $b; ?>
            </p>
            <div style="width: 150px; height: 150px ;
            background-color: rgb(<?php echo $rgb; ?>)"/>
        

</body>

</html>