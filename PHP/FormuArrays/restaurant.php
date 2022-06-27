<!DOCTYPE html>
<html>

<head>
    <title> dev </title>
</head>

<body>
    <h2> Detalles </h2> <br>
    <ul>
        <?php
        $name = $_POST["name"];
        $adress = $_POST["adress"];
        $nro = $_POST["nro"];
        $email = $_POST["email"];

        $pago1 = 0;
        $pago2 = 0;
        $pago3 = 0;
        $pago4 = 0;
        $pago5 = 0;
        $pago6 = 0;
        $pago7 = 0;

        echo "<b>PLATSO SOLICITADOS</B>";
        foreach ($_POST['fo'] as $food) {
            if ($food == "Chaufa de carne") {
                $pago1 = 8;
                echo "<br> $food";
            } elseif ($food == "Ceviche") {
                $pago2 = 15;
                echo "<br> $food ";
            } elseif ($food == "Pastel de papa") {
                $pago3 = 10;
                echo "<br> $food ";
            } elseif ($food == "Arroz con pollo") {
                $pago4 = 10;
                echo "<br> $food ";
            } elseif ($food == "Tallarines verdes") {
                $pago5 = 9;
                echo "<br> $food ";
            } elseif ($food == "Pollo a la brasa") {
                $pago6 = 50;
                echo "<br> $food ";
            } elseif ($food == "Aji de gallina") {
                $pago7 = 12;
                echo "<br> $food <br><br>";
            }
        }
        $total = $pago1 + $pago2 + $pago3 + $pago4 + $pago5 + $pago6 + $pago7;
        echo "<br><br><b>DATOS DEL CLIENTE</b>";
        echo "<br>Nombre: " . $name;
        echo "<br>Direccion: " . $adress;
        echo "<br>Numero de telefono: " . $nro;
        echo "<br>Correo electronico: " . $email;
        echo "<br>Total a pagar: " . $total;


        ?>
    </ul>
</body>

</html>