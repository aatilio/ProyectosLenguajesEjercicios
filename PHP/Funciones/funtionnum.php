<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Redondeo 
    $num = 15.8;
    echo " 15.8 redondeado es " . ceil($num);
    echo "<br> 15.8 redondeado es " . floor($num);
    $nu = -4.5;
    echo "<br> Valor absoluto de -4.5 s " . abs($nu);
    // Potenciacion 2 elevado a 8 
    echo "<br> Potenciacion 2 elevado a 8 es " . pow(2, 8);
    echo "<br> Logaritmo de 10 es " . log(10);
    echo "<br> Genera aleatorio entre 10 y 99 es" . rand(10, 99);
    echo "<br> Convertir decimal 2020 a binario: " . decbin(2020);
    echo "<br> Convertir decimal 2020 a octal: " . decoct(2020);
    echo "<br> Convertir decimal 2020 a hexadecimal: " . dechex(2020);
    echo "<br> Convertir binario 101010110 a decimal: " . bindec(101010110);
    ?>
</body>

</html>