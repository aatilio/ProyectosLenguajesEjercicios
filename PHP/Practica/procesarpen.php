<?php
    if(!$_POST){
        header('Location:conversorPEN.html');
    }
    function convertir()
    {
        $soles = $_POST['soles'];
        $moneda = $_POST['moneda'];
        //echo"El total de dolares es: S/. " .round($tota);
        if($moneda == 'Dolares'){
            $precio = 3.75;
        }else{
            $precio = 4.1;
        }
        $total = $soles / $precio;
        return array($soles, $moneda, $total);
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
        echo "El total de ".$resultado[0] ." soles en ". $resultado[1]." es: ".round($resultado[2],  2);
    ?>
</body>

</html>