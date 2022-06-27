<?php
function periCuadrado($lado)
{
    return $lado * 4;
}
function longCirculo($radio)
{
    return 2 * pi() * $radio;
}
function areaRectan($ancho, $alto)
{
    return $ancho * $alto;
}
function areaCirculo($rdio)
{
    return pi() * $rdio * $rdio;
}
function areaTriangugo($base, $altura)
{
    return $base * $altura / 2;
}
function max2($n1, $n2)
{
    $num = array($n1, $n2);
    return max($num);
}
function max3($n1, $n2, $n3)
{
    return max(array($n1, $n2, $n3));
}
function min2($n1, $n2)
{
    return min(array($n1, $n2));
}
function min3($n1, $n2, $n3)
{
    return min(array($n1, $n2, $n3));
}
function promedio($n1, $n2, $n3, $n4)
{
    return ($n1 + $n2 + $n3 + $n4) / 4;
}

//asignacion de opcion escojida en html
$opc = $_POST['opc'];

switch ($opc) {
    case 1:
        echo "El perimetro de un cuadrado de lado 45 es: " . periCuadrado(45);
        break;
    case 2:
        echo "La longitud de una circuferencia de radio 12 es: " . longCirculo(12);
        break;
    case 3:
        echo "El area de un rectangulo de alto 48 y ancho 25 es: " . areaRectan(25, 48);
        break;
    case 4:
        echo "El area de un circulo de radio 19 es: " . areaCirculo(19);
        break;
    case 5:
        echo "El area de un triangulo de base 15, altura 25 es: " . areaTriangugo(15, 25);
        break;
    case 6:
        echo "Numero mayor de 58 y 24 es: " . max2(58, 24);
        break;
    case 7:
        echo "Numero mayor de 12, 896 y 25478 es: " . max3(12, 896, 25478);
        break;
    case 8:
        echo "Numero menor de 58 y 24 es: " . min2(58, 24);
        break;
    case 9:
        echo "Numero menor de 12, 896 y 25478 es: " . min3(12, 896, 25478);
        break;
    case 10:
        echo "Promedio de las notas 15, 18, 20 y 11 es: " . promedio(15, 18, 20, 11);
        break;
    default:
        echo "ERROR!!!...";
        break;
}
?>