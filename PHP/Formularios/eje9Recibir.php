<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>I.E.S. Pedro P. Diaz</title>
</head>

<body>
    <?php
        $usu=$_REQUEST['usuario'];
        $pas=$_REQUEST['password'];
        if($usu=="alanatilio" && $pas=="ahoraraho1")
        { 
            echo "<h2>Bienvenido al sistema</h2>";
            echo "<hr>";
            echo "*******************************<br>";
            echo "*******************************<br>";
            echo "*******************************<br>";
            echo "*******************************<br>";
        }
        else
        {
            echo "Usted no tiene acceso<br>";
            echo "<a href='eje1.php'> Volver </a>";
        }
    ?>
</body>

</html>