<!DOCTYPE html>
<html>

<head>
    <title> month </title>
</head>

<body>
    <h2> Mes del año </h2>
    <?php   // Mostrar formulario si no fue enviado
if (!isset($_POST['btnenvia']))
{
?>
    <form method="post" action="mes.php">
        Digita el numero del mes: <br>
        <input type="text" name="txtmes" size="3" />
        <p>
            <input type="submit" name="btnenvia" value="Enviar" />
    </form>
    <?php   // si formulario se envio procesar datos
}
else
{
// Obtener mes
$mes=$_POST["txtmes"];
//Asignar nombre de  mes
    switch ($mes)
    {
        case 1 :
            $mons = "January";
            break;
        case 2 :
            $mons ="February";
            break;
        case 3 :
            $mons ="March";
            break;
        case 4 :
            $mons ="April";
            break;
        case 5 :
            $mons ="May";
            break;
        case 6 :
            $mons ="June";
            break;
        case 7 :
            $mons ="July";
            break;
        case 8 :
            $mons ="August";
            break;
        case 9 :
            $mons ="September";
            break;
        case 10 :
            $mons = "October";
            break;
        case 11 :
            $mons ="November";
            break;
        case 12 :
            $mons ="December";
            break;
            
        default :
            $mons  =" No existe";
            break;
    }
    echo " The month is ".$mons;
}
?>
</body>

</html>