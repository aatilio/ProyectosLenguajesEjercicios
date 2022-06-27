<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <?php
    echo "Función mktime<br>";
    $seg = mktime(0, 0, 0, 8, 21, 2011);
    echo $seg . "<br>";
    echo date("d-m-Y D", $seg);
    ?>
</body>

</html>