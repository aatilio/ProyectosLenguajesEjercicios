<!doctype html>
<html>

<head>
    <title>Alta</title>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "bodega") or die("Problemas con la conexión a la base de datos");
    mysqli_query($con, "insert into rubros(codigo, descripcion) values ($_REQUEST[codigo],'$_REQUEST[descripcion]')") or die(mysqli_error($con));
    mysqli_close($con);
    echo 'El nuevo rubro se almacenó';
    ?>
</body>

</html>