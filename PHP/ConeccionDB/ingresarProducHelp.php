<!doctype html>
<html>
<head>
<title>Alta de artículo</title>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","bodega") or die("Problemas con la conexión a la base de datos");
mysqli_query($con,"insert into productos (codigo, descripcion, precio, codigorubro)
values ($_REQUEST[codigo],'$_REQUEST[descripcion]',$_REQUEST[precio],$_REQUEST[codigorubro])") or
die(mysqli_error($con)); mysqli_close($con);
echo 'El nuevo artículo se almacenó';
?>
</body>
</html>