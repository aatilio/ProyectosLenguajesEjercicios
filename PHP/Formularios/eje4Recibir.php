<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>I.E.S. Pedro P. Diaz</title>
</head>

<body>
    <?php
        if ($_REQUEST['operacion']=="Multiplicar")
        {
            $multiplo=$_REQUEST['valor1'] * $_REQUEST['valor2']; 
            echo "La multiplicacion es:".$multiplo;
        }
        else
        {
            if ($_REQUEST['operacion']=="Dividir")
            {
                $divi=$_REQUEST['valor1'] / $_REQUEST['valor2']; 
                echo "La divicion es:".$divi;
            }
        }
    ?>
</body>

</html>