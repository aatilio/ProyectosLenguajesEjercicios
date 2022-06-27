<?php
//definiendo la funcion 
function diaHoy()
{
    echo "Hoy es " . date('D', mktime(time()));
}
//llamar la funcion 
diaHoy();
