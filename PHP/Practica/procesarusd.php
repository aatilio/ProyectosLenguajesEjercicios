<?php
    if(!$_POST){
        header('conversorUSD.html');
    }
    function convertir()
    {
        $dolares = $_POST['dolares'];
        $moneda = $_POST['moneda'];
        if($moneda == 'Soles'){
            $precio = 0.2696;
        }else{
            $precio = 1.0833;
        }
        $total = $dolares / $precio;
        return array($dolares, $moneda, $total);
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Convertidor de divisas</title>
</head>

<body>
    <h1>DIVISAS</h1>
    <?php
        $resultado = convertir();
        echo "El total de ".$resultado[0] ." dolares en ". $resultado[1]." es: ".round($resultado[2],  2);
    ?>
</body>

</html>