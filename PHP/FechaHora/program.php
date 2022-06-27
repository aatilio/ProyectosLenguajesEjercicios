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
        <form method="post" action="program.php">
            <p> <b> DATOS </b> </p>
            <label for="start">Ingresa su nombre:</label>
            <input type="text" name="name" size="10" /><br>
            <label for="start"> ingrese su fecha de nacimiento:</label>
            <input type="date" id="start" name="fecha" value="2022-01-01" min="2000-01-01" max="2022-12-31">
            <br><br>
            <input type="submit" name="btnEnvia" value="Calcular Sello cronologico" />

        <?php

        // si formulario se envio procesar datos de entrada 
    } else {

        $name = $_POST['name'];
        $fechaber = $_REQUEST['fecha'];
        $fechahoy = date("Y/m/d");

        //$dias = $fechaber -> diff($fechahoy);
        //echo $dias -> days . ' dias';
        
        $dias = (strtotime($fechaber) - strtotime($fechahoy)) / 86400;
        $dias = abs($dias);
        $dias = floor($dias); 
        echo "Nombre: " . $name;
        echo " <br>Numero de dias: " . $dias;
        echo " <br>Numero de meses: " . $dias / 30;
        echo " <br>Numero de años: " . $dias / 30 / 12;
    }
        ?>
</body>

</html>