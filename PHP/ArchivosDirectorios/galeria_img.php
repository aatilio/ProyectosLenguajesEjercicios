<!DOCTYPE html>
<html>

<head>
    <title> Galeria de imagenes... </title>
</head>
<style type="tex/css">
    ul { 
        list-style-type: none; 
    } 
li { 
    float: right; 
    padding: 50px; margin: 50px; 
    font: bold 10px verdana, sans-serif;
    text-size-adjust: 50px;
} 
img { 
    display: flex;
    justify-content: center; 
    border: 70px solid #333300; 
    margin-bottom: 5px; 
} 
</style>

<body>
    <h2> Galeria de autos lujosos </h2>
    <ul>
        <?php
        //definir ubicacion de imagenes 
        $dirImagen = "img";
        //definir extension de imagenes 
        $extImagen = array('gif', 'jpg', 'jpeg', 'tiff', 'bmp', 'png');
        //inicializa matriz con imagenes halladas 
        $listaImagen = array();
        //lee directorio y construye lista de imagenes 
        if (file_exists($dirImagen)) {
            $dp = opendir($dirImagen) or die("ERROR: no se puede abrir directorio de imagenes...");
            while ($archivo = readdir($dp)) {
                if ($archivo != '.' && $archivo != '..') {
                    $datosArchivo = pathinfo($archivo);
                    if (in_array($datosArchivo['extension'], $extImagen)) {
                        $listaImagen[] = "$dirImagen/$archivo";
                    }
                }
            }
            closedir($dp);
        } else {
            die("ERROR: el directorio no existe...");
        }
        //iterar en la lista de imagenes 
        if (count($listaImagen) > 0) {
            for ($i = 0; $i < count($listaImagen); $i++) {
        ?>
    </ul>
    <li>
        <img height="300" width="500" src="<?php echo $listaImagen[$i]; ?>" />
        <br>
        <?php
                echo basename($listaImagen[$i]);
        ?>
        <br>
        <?php
                echo round(filesize($listaImagen[$i]) / 1024) . 'KB';
        ?>
    </li>
<?php
            }
        } else {
            die("ERROR: no se encontro imagen...");
        }
?>
</ul>
</body>

</html>