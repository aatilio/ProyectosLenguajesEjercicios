<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>I.E.S. Pedro P. Diaz</title>
</head>

<body>
    <?php
        $texto=$_REQUEST['texto'];
        for($x=0;$x<10;$x++)
        { 
            echo "$texto<br>";
        }
    ?>
</body>

</html>