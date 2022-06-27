<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>I.E.S. Pedro P. Diaz</title>
</head>

<body>
    <?php
        $num1=$_REQUEST['numero1'];
        $num2=$_REQUEST['numero2'];
        $num3=$_REQUEST['numero3'];
        $suma=$num1+$num2+$num3;
        echo "La suma de $num1 + $num2 + $num3 es: $suma <br>";
        if($num1==$num2 && $num2==$num3)
        { 
            echo "Los números son iguales";
        }
        else
        {   
            echo "Los números no son iguales";
        }
    ?>
</body>

</html>