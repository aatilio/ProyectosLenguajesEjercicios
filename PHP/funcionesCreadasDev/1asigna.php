<?php
//definir funcion al inicio del programa
function obtieneDireccion($nom, $dominio = 'mioDominio.info')
{
    return $nom . '@' . $dominio;
}
//llamar, usar a la funcion
echo "Mi direccion es:" . obtieneDireccion('Filomeno');
echo "<br> Tu direccion es:" . obtieneDireccion('alan', 'sorian.com');
