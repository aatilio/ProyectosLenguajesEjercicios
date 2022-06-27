<?php
    function calcularsalario()
    {
        $agencia = $_GET['agencia'];
        $cargo = $_GET['cargo'];

        switch ($cargo) {
            case 1:
                //echo "Su salario es: 10000";
                $sueldo = 100000;
                break;
            case 2:
                $sueldo = 85000;
                break;
            case 3:
                $sueldo = 70000;
                break;
            case 4:
                $sueldo = 55000;
                break;
            case 5:
                $sueldo = 26000;
                break;
            case 6:
                $sueldo = 10000;
                break;
            case 7:
                $sueldo = 5500;
                break;
            }
            echo "su sueldo es: ". $sueldo;
    }  
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sueldos</title>
</head>

<body>
    <?php
        calcularsalario();
        //echo "el suedo de la persona es: " .$resultado;
        //echo "El total de ".$resultado[0] ." euros en ". $resultado[1]." es: ".round($resultado[2],  2);
    ?>
</body>

</html>