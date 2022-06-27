<!DOCTYPE html>
<html>

<head>
    <title> Definiciones segun a la edad </title>
</head>

<body>
    <h2> Definir la categoria </h2>
    <?php   // Mostrar formulario si no fue enviado
if (!isset($_POST['btnenvia']))
{
?>
    <form method="post" action="edad.php">
        Ingresa su nombre: <br>
        <input type="text" name="txtname" size="25" />
        <p>
            Digita tu Eddad: <br>
            <input type="text" name="txtedad" size="3" />
        <p>
            <input type="submit" name="btnenvia" value="Enviar" />
    </form>
    <?php   // si formulario se envio procesar datos
}
else
{
    // Obtener nombre
$name=$_POST["txtname"];
// Obtener Eddad
$edad=$_POST["txtedad"];
//Asignar tienda

    if ($edad <= 0 || $edad >= 101) {
        echo"Error de dato (Edad)";
    }
    elseif ($edad >= 0 && $edad <= 6)
    {
    $cate = "infancia";
    }
    elseif ($edad >= 7 && $edad <= 10)
    {
    $cate = "niñez";
    }
    elseif ($edad >= 11 && $edad <= 14)
    {
    $cate = "pubertad";
    }
    elseif ($edad >= 15 && $edad <= 17)
    {
    $cate = "adolescencia";
    }
    elseif ($edad >= 18 && $edad <= 30)
    {
    $cate = "juventud";
    }
    elseif ($edad >= 31 && $edad <= 65)
    {
    $cate = "adultez";
    }
    elseif ($edad >= 66 && $edad <= 100)
    {
    $cate = "ancianidad";
    }
    echo "La persona de nombre: ". $name . ", pertenece a la categoria ". $cate ;
}

?>
</body>

</html>