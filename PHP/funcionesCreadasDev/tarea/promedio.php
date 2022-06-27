<?php
/**
 * A partir del ingreso de tres notas en el rango de 0 a 20, usar una función 
 * promedio($a,$b,$c) que retorne el promedio obtenido; además crear la función 
 * comentario($a,$b,$c) que retorne según el promedio, si es de 18 a 20 “Excelente”, 
 * si es de 15 a 17 “Bueno”, si es de 13 a 14 “Regular”, si es de 10 a 12 “Recuperable”, 
 * si es de 0 a 9 “Jalado Repite”
 */

function promedio($a, $b, $c)
{
    return ($a + $b + $c) / 3;
}

function definiciones($prome)
{
    if ($prome >= 0 and $prome < 10) {
        echo "JADADO REPITE, Su promedio es " . $prome;
    } elseif ($prome >= 10 and $prome < 13) {
        echo "RECUPERABLE, Su promedio es " . $prome;
    } elseif ($prome >= 13 and $prome < 14) {
        echo "REGULAR, Su promedio es " . $prome;
    } elseif ($prome >= 15 and $prome < 18) {
        echo "BUENO, Su promedio es " . $prome;
    } elseif ($prome >= 18 and $prome <= 20) {
        echo "EXELENTE, Su promedio es " . $prome;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title> Notas </title>
</head>

<body>
    <h2> Notas </h2>
    <?php
    // si formulario no se envio lo muestra
    if (!isset($_POST['btnEnvia'])) {
    ?>
        <form method="post" action="promedio.php">
            Ingrese las notas:<br>
            <label for="">Nota 1</label>
            <input type="text" name="n1" size="3" />
            <label for="">Nota 2</label>
            <input type="text" name="n2" size="3" />
            <label for="">Nota 3</label>
            <input type="text" name="n3" size="3" /><br>
            <input type="submit" name="btnEnvia" value="Calcular" />
        </form>
    <?php
        // si formulario ya se envio procesa datos
    } else {
        $n1 = (int) $_POST['n1'];
        $n2 = (int) $_POST['n2'];
        $n3 = (int) $_POST['n3'];

        $prome = promedio($n1, $n2, $n3);
        definiciones($prome);
    }
    ?>
</body>

</html>