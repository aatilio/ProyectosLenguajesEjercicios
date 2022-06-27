<?php 
/**PHP permite trabajar con directorios en el sistema de archivos del sistema 
 * operativo, iterando en su contenido o recorrido del árbol de directorio; 
 * para ello usa un objeto PHP de la clase DirectoryIterator, este objeto lee 
 * un directorio y presenta una lista de archivos contenidos en el directorio. */
$dit = new DirectoryIterator('.');
//recorrido de directorio 
while ($dit->valid()) {
    if (!$dit->isDot()) {
        echo $dit->getFilename() . "<br>";
    }
    $dit->next();
}
unset($dit);
