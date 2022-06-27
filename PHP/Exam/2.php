<!DOCTYPE html>
<html>

<head>
    <title> Proyecto Tienda Campamento </title>
</head>

<body>
    <?php   // Mostrar formulario si no fue enviado
    if (!isset($_POST['btnenvia'])) {
    ?>
        <form method="post" action="2.php">
            <label for="">Digita tu nombre:</label>
            <input type="text" name="name" size="10" />
            <br> <label for="">Digita tu Eddad:</label>
            <input type="text" name="edad" size="3" />
            <br><label for="">Digita tu genero: </label>
            <select name="tipo">
                <option value=1><b>Masculino</b></option>
                <option value=2><b>Femenino</b></option>
            </select><br><br>
            <input type="submit" name="btnenvia" value="Filtrar" />
        </form>
    <?php   // si formulario se envio procesar datos
    } else {
        // Obtener Eddad
        $name = $_POST["name"];
        $genero = $_POST["tipo"];
        $edad = $_POST["edad"];
        $tienda;
        $r = 0;
        $n = 0;
        $ve = 0;
        $a = 0;
        $masr = 0;
        $femr = 0;
        $masv = 0;
        $femv = 0;
        $masn = 0;
        $femn = 0;
        $masa = 0;
        $fema = 0;
        //Asignar tienda
        if ($edad > 6 && $edad < 11) {
            $tienda = "Roja";
            $r++;
            if ($genero == 1) {
                $masr++;
            } else {
                $femr++;
            }
        } elseif ($edad > 10 && $edad < 15) {
            $tienda = "Naranja";
            $n++;
            if ($genero == 1) {
                $masn++;
            } else {
                $femn++;
            }
        } elseif ($edad > 14 && $edad < 19) {
            $tienda = "Verde";
            $ve++;
            if ($genero == 1) {
                $masv++;
            } else {
                $femv++;
            }
        } else {
            $tienda = "Azul";
            $a++;
            if ($genero == 1) {
                $masa++;
            } else {
                $fema++;
            }
        }
        echo "<br>Tienda roja";
        echo "<br>Numero de personas " . $r;
        echo "<br>Numero de varones " . $masr;
        echo "<br>Numero de mujeres " . $femr;


        echo "<br><br>Tienda verde";
        echo "<br>Numero de personas " . $ve;
        echo "<br>Numero de varones " . $masv;
        echo "<br>Numero de mujeres " . $femv;

        echo "<br><br>Tienda Naranja";
        echo "<br>Numero de personas " . $n;
        echo "<br>Numero de varones " . $masn;
        echo "<br>Numero de mujeres " . $femn;

        echo "<br><br>Tienda Azul";
        echo "<br>Numero de personas " . $a;
        echo "<br>Numero de varones " . $masa;
        echo "<br>Numero de mujeres " . $fema;
    }
    ?>
</body>

</html>