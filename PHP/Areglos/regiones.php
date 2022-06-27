<?php
$provin = array(
    "Amazonas", "Ancash", "Apurimac", "Arequipa", "Ayacucho", "Cajamarca", "Callao", 
    "Cusco", "Huancavelica", "Huanuco", "Ica", "Junín", "La Libertad", "Lambayeque", 
    "Lima", "Loreto", "Madre de Dios", "Moquegua", "Pasco", "Piura", "Puno", "San Martín", 
    "Tacna", "Tumbes", "Hucayali"
);
echo "<br>FOR<br>";
for ($i=0; $i < 25; $i++) { 
    echo "<br>Provincia numero ". $i+1 ." es: <b>".$provin[$i]."</b>";
}
echo "<br><br>WHILE<br>";
$a = 1;
while ($a <= 25) {
    echo "<br>Provincia numero ". $a ." es: <b>".$provin[$a-1]."</b>";
    $a ++;
}