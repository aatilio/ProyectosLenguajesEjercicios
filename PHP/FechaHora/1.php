<?php 
/**Generar Fechas y Horas, PHP representa valores de fechas y horas en el 
 * formato de sello cronológico UNIX con la función mktime(); por ejemplo 
 * con el script: */
echo "Impresion de fecha y hora sello cronologico <br>";
echo mktime(7, 15, 00, 05, 30, 2022);
//h,m,s,d,m,a 
echo "<br> mktime sin argumentos momento actual:" . mktime(time());
?>