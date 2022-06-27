<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <?php
    $datos=getdate();
    $seg=$datos['0'];
    $seg = time();
    $min = $seg / 60;
    $horas = $min / 60;
    $dias = $horas / 24;
    $meses = $dias / 30;
    $anios = $meses / 12;
    echo "Segundos: " . $seg . "<br>";
    echo "Minutos: " . $min . "<br>";
    echo "Días: " . $horas . "<br>";
    echo "Horas: " . $dias . "<br>";
    echo "Meses: " . $meses . "<br>";
    echo "Años: " . $anios . "<br>";
    ?>
</body>

</html>