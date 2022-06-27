<?php //MODIFICAR Y ELIMINAR DATOS DE UNA MATRIZ 
$autos = array('Toyota', 'Hyudai', 'Ford');

//SABER EL TAMAÑO DE LA MATRIZ
echo "La matriz tiene:" . count($autos) . " elementos <br><BR>";

echo "Auto de primera celda: $autos[0] <br>";
echo "Auto de segunda celda: $autos[1] <br>";
echo "Auto de tercera celda: $autos[2] <br>";
//modificar dato 
$autos[1] = 'Nissan';
echo "Auto de primera celda: $autos[0] <br>";
echo "Auto de segunda celda: $autos[1] <br>";
echo "Auto de tercera celda: $autos[2] <br>";
//eliminar dato 
unset($autos[1]);
echo "Auto de primera celda: $autos[0] <br>";
echo "Auto de segunda celda: $autos[1] <br>";
echo "Auto de tercera celda: $autos[2] <br>";
