<?php
    if(!$_POST){
        header('Location:conversor.html');
    }
    function convertir()
    {
        $euros = $_POST['euros'];
        $moneda = $_POST['moneda'];
        if($moneda == 'Dolares'){
            $precio = 0.92312;
        }else{
            $precio = 0.24582;
        }
        $total = $euros / $precio;
        return array($euros, $moneda, $total);
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
        echo "El total de ".$resultado[0] ." euros en ". $resultado[1]." es: ".round($resultado[2],  2);
    ?>
</body>

</html>