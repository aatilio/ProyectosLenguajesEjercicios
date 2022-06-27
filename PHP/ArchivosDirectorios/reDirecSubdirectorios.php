<?php
/**
 * Para procesar un directorio y sus subdirectorios se puede aplicar funciones 
 * recursivas, es decir funciones que se llamen así mismas cuantas veces 
 * sea necesario. En el siguiente ejemplo la función imprimeDir(), acepta 
 * dos argumentos, el nombre del directorio de nivel superior y la cadena 
 * de profundidad, la cual indica por sangría la posición de un archivo o 
 * directorio dentro de la jerarquía; entonces abre un puntero a directorio 
 * e inicia el proceso con readdir(), presentando el nombre de cada directorio
 * o archivo que encuentra; continuando el proceso con llamadas recursivas a
 * la función.
 */
function imprimeDir($dir, $subdir = '+')
{
    if (file_exists($dir)) {
        $dp = opendir($dir) or die("ERROR: no se puede abrir directorio...");
        //leer contenido de directorio y subdirectorios
        while ($archivo = readdir($dp)) {
            if ($archivo != '.' && $archivo != '..') {
                echo "$subdir $dir/$archivo <br>";
                if (is_dir("$dir/$archivo")) {
                    imprimeDir("$dir/$archivo", $subdir . '+');
                }
            }
        }
        //cerrar puntero a directorio
        closedir($dp);
    }
} ?>
<!DOCTYPE html>

<head>
    <title> Directorio </title>
</head>

<body>
    <h2> Directorio...</h2>
    <?php
    //presenta contenido de directorio 
    if (file_exists('.')) {
        echo '<pre>';
        imprimeDir('.');
        //imprimeDir('d:/AAAA_Clases'); 
        echo '</pre>';
    }
    ?>
</body>

</html>