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
        /**Crear un programa que use formulario web para ingresar 
         * un número en el rango de 10 a 20 y hallar el logaritmo. */
    ?>
        <form method="post" action="deciloga.php">
            <p> <b>Digite un Numero entre el rango de 10 a 20:</b> </p>
            <input type="text" name="num" size="3" />
            <input type="submit" name="btnEnvia" value="Calcular" />
        <?php
        // si formulario se envio procesar datos de entrada 
    } else {

        $num = $_POST['num'];

        if ($num > 9 && $num < 21) {
            $log = log($num);
            echo "El numero " . $num . " en logaritmo es: " . $log;
        } else {
            echo "el numero esta fuera de rango espesificado";
        }
    }
        ?>
</body>

</html>