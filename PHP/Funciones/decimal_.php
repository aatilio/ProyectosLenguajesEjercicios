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
    // si formulario no se envio lo muestra
    if (!isset($_POST['btnEnvia'])) {
        /**Crear un programa que use formulario web para ingresar un numero decimal 
         * en el rango de 1 a 19999 y lo imprima en binario, octal, hexadecimal */
    ?>
        <form method="post" action="decimal_.php">
            <p> <b>Digite un Numero en tre un rango de 1 a 19999:</b> </p>
            <input type="text" name="num" size="3" />
            <p><b>Convertir a:</b></p>
            <select name="opc">
                <option value="1"><b>Binario</b></option>
                <option value="2"><b>Octal</b></option>
                <option value="3"><b>Hexadecimal</b></option>
            </select>
            <input type="submit" name="btnEnvia" value="Calcular" />
        <?php
        // si formulario se envio procesar datos de entrada 
    } else {
        $opc = $_POST['opc'];
        $num = $_POST['num'];

        if ($num > 0 && $num < 20000) {
            switch ($opc) {
                case 1:
                    $bina = decbin($num);
                    echo "El numero " . $num . " en binario es: " . $bina;
                    break;
                case 2:
                    $oxt = decoct($num);
                    echo "El numero " . $num . " en octal es: " . $oxt;
                    break;
                case 3:
                    $hex = dechex($num);
                    echo "El numero " . $num . " en hexadecimal es: " . $hex;
                    break;
                default:
                    echo "Ocurrio un error en el transcurzo...";
                    break;
            }
        } else {
            echo "el numero esta fuera de rango espesificado";
        }
    }
        ?>
</body>

</html>