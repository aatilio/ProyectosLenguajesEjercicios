<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>I.E.S. Pedro P. Diaz</title>
</head>

<body>
    <?php
        $num=$_REQUEST['numero'];
        echo "<table border=1 width=100%>"; echo "<tr>";
        echo "<td>";
        echo "Tabla de multiplicar"; echo "<hr>"; 
        for($x=0;$x<=12;$x++)
        {
            $res=$x*$num;
            echo "$x x $num = $res <br>";
        }
        echo "</td>";
        echo "<td>";
        echo "Tabla de la suma"; echo "<hr>"; 
        for($x=0;$x<=12;$x++)
        {
            $res=$x+$num;
            echo "$x + $num = $res <br>";
        }
        echo "</td>";
        echo "</tr>"; echo "</table>";
    ?>
</body>

</html>