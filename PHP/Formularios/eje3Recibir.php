<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>I.E.S. Pedro P. Diaz</title>
</head>

<body>
    <?php
        //estas osn con el tipo de checkbox
        if (isset($_REQUEST['check1']))
        {
        $suma=$_REQUEST['valor1'] + $_REQUEST['valor2'];
        echo "La suma es:".$suma."<br>";
        }
        if (isset($_REQUEST['check2']))
        {
        $resta=$_REQUEST['valor1'] - $_REQUEST['valor2'];
        echo "La resta es:".$resta;
        }
    ?>
</body>

</html>