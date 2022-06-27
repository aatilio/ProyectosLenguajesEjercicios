<?php
/**crear un programa usando funciones definidas por el programador, que implemente un 
formulario web para que ingrese: el nombre de una persona, su fecha de nacimiento mm/dd/aaaa, 
el número de horas que duerme cada día. Procesar los datos de entrada para obtener: (I) Tiempo 
Vivido: en años, meses, días (II) Tiempo Despierto: años, meses, días (III) Tiempo Durmiendo: 
años, meses, días */
function total($hoySello, $fechaNacSello, $horasd, $name)
{
    //calculos de edad
    $edadDias = floor(($hoySello - $fechaNacSello) / 86400);
    $edadAnios = floor($edadDias / 365);
    $edadMeses = floor($edadDias / 30);
    echo "Nombre: $name <br>";
    echo "Edad en dias : $edadDias <br>";
    echo "Edad en meses : $edadMeses <br>";
    echo "Edad en Años : $edadAnios <br>";

    despierto($horasd, $edadDias);
    dormido($horasd, $edadDias);
}

function despierto($horas, $Dias)
{
    $dd = (($Dias * 24) - $Dias * $horas) / 24;
    $md = $dd / 30;
    $ad = $md / 12;
    echo "<br>numero de dias despierto: " . $dd;
    echo "<br>numero de meses despierto: " . $md;
    echo "<br>numero de años despierto:  $ad <br>" ; 
}

function dormido($horas, $Dias)
{
    $dd = (($Dias * 24) - $Dias * $horas) / 24;
    $dides = $Dias - $dd;
    $md = $dides / 30;
    $ad = $md / 12;
    echo "<br>numero de dias dormido: " . $dides;
    echo "<br>numero de meses dormido: " . $md;
    echo "<br>numero de años dormido: " . $ad;
}

function verificar($fechaArray, $hoySello, $fechaNacSello, $horasd, $name)
{

    // verificar de nacimiento enviada
    if (sizeof($fechaArray) != 3) {
        die('Error: digite fecha valida');
    }
    if (!checkdate($fechaArray[0], $fechaArray[1], $fechaArray[2])) {
        die('Error: digite fecha valida');
    }
    if ($fechaNacSello >= $hoySello) {
        die('Error: digite fecha valida');
    } else {
        total($hoySello, $fechaNacSello, $horasd, $name);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title> Operaciones </title>
</head>

<body>
    <h2> Calculo de edad </h2>
    <?php
    // si formulario no se envio lo muestra
    if (!isset($_POST['btnenvia'])) {
    ?>
        <form method="post" action="datosExa.php">
            Digite su nombre: <br>
            <input type="text" name="name" /><br>
            Digite fecha nacimiento en el formato mm/dd/aaaa : <br>
            <input type="text" name="fdn" /><br>
            Digite el numero de horas que duerme: <br>
            <input type="text" name="horad" /><br><br>
            <input type="submit" name="btnenvia" value="Calcular" />
        </form>
    <?php
        //si formulario fue enviado procesa datos
    } else {
        $name = $_POST['name'];
        $horasd = $_POST['horad'];
        //obtiene datos de nacimiento
        $fechaArray = explode('/', $_POST['fdn']);
        //calcula sello cronologico
        $fechaNacSello = strtotime($_POST['fdn']);
        $hoySello = strtotime('today');

        verificar($fechaArray, $hoySello, $fechaNacSello, $horasd, $name);
    }
    ?>
</body>

</html>