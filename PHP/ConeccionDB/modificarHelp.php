<!doctype html>
<html>

<head>
    <title>Modificación de rubro.</title>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "bodega") or die("Problemas con la conexión a la base de datos");
    mysqli_query($con, "update rubros set descripcion='$_REQUEST[descripcion]' where codigo=$_REQUEST[codigo]") or die(mysqli_error($con));
    echo 'Se modificó la descripción del rubro';
    mysqli_close($con);
    ?>
</body>

</html>