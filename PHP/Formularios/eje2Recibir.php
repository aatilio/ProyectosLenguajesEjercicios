<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>I.E.S. Pedro P. Diaz</title>
</head>

<body>
    <?php
        if ($_REQUEST['radio1']=="suma")
        {
        $suma=$_REQUEST['valor1'] + $_REQUEST['valor2']; 
        echo "La suma es:".$suma;
        }
        else
        {
        if ($_REQUEST['radio1']=="resta")
        {
        $resta=$_REQUEST['valor1'] - $_REQUEST['valor2']; 
        echo "La resta es:".$resta;
        }
        }
    ?>
</body>

</html>