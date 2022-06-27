<?php
    function saludar()
    {
        $name = $_GET['name'];
        $cargo = $_GET['cargo'];

        switch ($cargo) {
            case "gerencia":
                //echo "Su salario es: 10000";
                $cargo = "Gerente";
                break;
            case "administración":
                $cargo = "Administrador";
                break;
            case "empleado":
                $cargo = "Empleado";
                break;
            case "obrero":
                $cargo ="Obrero";
                break;
            }
            return array($name, $cargo);
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
        $resultado = saludar();
        //echo "el suedo de la persona es: " .$resultado;
        echo "Un saludo Sr(a) ".$resultado[0] .", ". $resultado[1]." de la empresa ";
    ?>
</body>

</html>