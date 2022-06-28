<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Pedro P. Diaz</title>
</head>

<body> <?php $fp = fopen("texto1.txt", "r");
        echo "<h2>Leer el texto cada diez caracteres</h2>";
        echo fread($fp, 10);
        echo "<br>";
        echo fread($fp, 10);
        echo "<br>";
        echo fread($fp, 10);
        echo "<br>";
        fclose($fp); ?> </body>

</html>