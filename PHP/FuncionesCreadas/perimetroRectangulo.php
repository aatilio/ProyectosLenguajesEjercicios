<?php
//definir funcion 
function perimetroRectangulo($largo, $ancho)
{
    $perimetro = 2 * ($largo + $ancho);
    echo "El perimetro de rectangulo es: $perimetro";
}
//llamar a la funcion 
perimetroRectangulo(8, 4);
