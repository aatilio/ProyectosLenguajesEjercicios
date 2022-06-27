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
    ?>
        <form method="post" action="3.php">
            <label for="">Digita el primer numero: </label>
            <input type="text" name="n1" size="5" />
            <br> <label for="">Digita el primer numero: </label>
            <input type="text" name="n2" size="5" />
            <br><label for="">Operaciones disponibles: </label>
            <select name="opc">
                <option value=1><b>Sumar</b></option>
                <option value=2><b>Restar</b></option>
                <option value=3><b>Multiplicar</b></option>
                <option value=4><b>Dividir</b></option>
            </select><br><br>
            <input type="submit" name="btnenvia" value="Calcular" />
        <?php
        // si formulario se envio procesar datos de entrada 
    } else {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $opc = $_POST['opc'];
        switch ($opc) {
            case 1:
                echo "<h3 >Suma</h3>";
                echo "La suma de los numeros es: " . $n2 + $n2;
                break;
            case 2:
                echo "<h3 >Resta</h3>";
                echo "La resta de los numeros es: " . $n2 + $n2;
                break;
            case 3:
                echo "<h3 >Multiplicacion</h3>";
                echo "El producto de los numeros es: " . $n2 + $n2;
                break;
            case 4:
                echo "<h3 >Divicion</h3>";
                echo "La divicion de los numeros es: " . $n2 + $n2;
                break;
            default:
                echo "Ocurrio un error en el transcurzo...";
                break;
        }
    }
        ?>
</body>

</html>