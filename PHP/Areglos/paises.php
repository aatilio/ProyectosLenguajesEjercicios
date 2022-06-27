<?php
$latan = array(
    "Argentina" => "Buenos Aires", "Bolivia" => "Sucre", "Chile" => "Santiago de Chile",
    "Brasil" => "Brasilia", "Colombia" => "Bogota", "Ecuador" => "Quito",
    "Paraguay" => "Asuscion", "Perú" => "Lima", "Surinam" => "Parabarimo",
    "Teinidad y Tobago " => "Puerto España", "Uruguay" => "Montevideo", 
    "Venezuela" => "Caracas"
);
echo "<br>foreach<br>";

foreach ($latan as $pais => $capital) {
    echo "<br>Pais <b>".$pais."</b> capital ". $capital;
}
