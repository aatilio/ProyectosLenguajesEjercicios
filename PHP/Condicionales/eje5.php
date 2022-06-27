<!DOCTYPE html>
<html>

<head>
    <title> Proyecto Tienda Campamento </title>
</head>

<body>
    <h2> Asignar tienda campamento </h2>
    <?php   // Mostrar formulario si no fue enviado
if (!isset($_POST['btnenvia']))
{
?>
    <form method="post" action="eje5.php">
        Digita tu Eddad: <br>
        <input type="text" name="txtedad" size="3" />
        <p>
            <input type="submit" name="btnenvia" value="Enviar" />
    </form>
    <?php   // si formulario se envio procesar datos
}
else
{
// Obtener Eddad
$edad=$_POST["txtedad"];
//Asignar tienda
if ($edad <= 9)
{
echo "Esta en tienda Roja";
}
elseif ($edad > 9 && $edad < 11)
{
echo "Esta en tienda Azul";
}
elseif ($edad > 11 && $edad < 14)
{
echo "Esta en tienda Verde";
}
elseif ($edad > 14 && $edad < 17)
{
echo "Esta en tienda Naranja";
}
else
{
echo "No tiene tienda...";
}
}
?>
</body>

</html>