<?php
//matriz indexada que anida una matriz asociativaZ  
$directorio = array(
    array('nombre' => 'Pedro P Diaz', 'telefono' => '464006', 'correo' => 'admisionppd@gmail.com'),
    array('nombre' => 'Sheyla Vargas', 'telefono' => '943464006', 'correo' => 'rosava@gmail.com')
);
//acceso 
echo "Telefono del instituto:" . $directorio[0]['telefono'];
