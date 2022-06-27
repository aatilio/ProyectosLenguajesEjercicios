<?php
$notas = array(16, 12, 18, 16, 19, 11, 14, 18, 10, 8, 15, 18, 20, 18, 
6, 8, 9, 13, 12, 15, 14, 17, 18);
$nualu = count($notas);
$suma = 0;
$jalados = 0;
$regulares = 0;
$buenos = 0;
$exelentes = 0;
for ($i = 0; $i < $nualu; $i++) {
    $suma = $suma + $notas[$i];
    if ($notas[$i] > 0 and $notas[$i] < 13) {
        $jalados++;
    }
    if ($notas[$i] >= 13 and $notas[$i] < 14) {
        $regulares++;
    }
    if ($notas[$i] >= 14 and $notas[$i] < 17) {
        $buenos++;
    }
    if ($notas[$i] >= 17 and $notas[$i] <= 20) {
        $exelentes++;
    }
}
echo "<b>SALIDA DE DATOS</b>";
echo "<br>Total de alumnos: " . $nualu;
echo "<br>Promedio general: " . $suma / $nualu;
echo "<br>Alumnos exelentes: " . $exelentes;
echo "<br>Alumnos buenos: " . $buenos;
echo "<br>Alumnos rejulares: " . $regulares;
echo "<br>Alumnos jalados: " . $jalados;
