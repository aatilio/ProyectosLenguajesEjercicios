<?php
//definir funcion 
function retornaPerimetroRectangulo($largo, $ancho)
{
    $perimetro = 2 * ($largo + $ancho);
    return $perimetro;
}
//llamar a la funcion 
echo "El perimetro de rectangulo es:" . retornaPerimetroRectangulo(58, 86);
