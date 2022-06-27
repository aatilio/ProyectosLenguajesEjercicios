<?php
//Otra forma de poder asignar datos en un arreglo asociativo
$usuario = array('nombreUsuario' => 'Pedro', 'password' => 'ppd', 'servidor' => '192.168.0.1');
echo "La contarseña es:" . $usuario['password'];


echo "<br><br>Otra forma de asignar datos<br>";
$usuario2['nombre'] = 'Pedro Pablo Diaz';
$usuario2['clave'] = 'ppd';
$usuario2['server'] = '198.160.0.1';
echo "El usuario es:" . $usuario2['nombre'];


echo "<br><br>Otra forma de asignar datos<br>";
$usuario3 = array('nombre' => 'Pedro Pablo', 'clave' => 'ppd', 'server' => '198.160.0.1');
echo "El server es:" . $usuario3['server'];
