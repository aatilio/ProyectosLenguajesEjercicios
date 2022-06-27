<?php
/**
 * Crear un programa que implemente la función primo($n), que retorne el mensaje 
 * “el número es primo” o “el número no es primo”, de un numero ingresado en una 
 * caja de texto de un formulario web
 */
function esPrimo($num)
{
    $cont = 0;
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0)
            $cont = $cont + 1;
    }
    if ($cont == 2) {
        return " Es primo";
    } else {
        return " NO es primo";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title> Saber si un numero es primo o no </title>
</head>

<body>
    <h2> Numero primo </h2>
    <?php
    // si formulario no se envio lo muestra
    if (!isset($_POST['btnEnvia'])) {
    ?>
        <form method="post" action="esPrimo.php">
            Ingrese el numero:<br>
            <input type="text" name="n1" size="3" />
            <p>
                <input type="submit" name="btnEnvia" value="Calcular" />
        </form>
    <?php
        // si formulario ya se envio procesa datos
    } else {
        $num1 = (int) $_POST['n1'];
        echo "El numero " . $num1 . " es " . esPrimo($num1);
        // invoca, llama y usa la funcion maximo comun divisor

    }
    ?>
</body>

</html>