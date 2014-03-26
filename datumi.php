<?php 


//setlocale(LC_ALL, 'sr_RS');


echo time();
echo "<br>";
echo mktime(10,10,0, 12,7,1975);

$vreme = time();

$rodj = mktime(10,10,0, 12,7,1975);
echo "<br>";

echo strtotime("+1 day");

echo "<br>";

echo date("d. m. l Y. G:i:s", $rodj);


echo "<br>";

$datum_arr = getdate($rodj);

echo "<pre>";
var_dump($datum_arr);
echo "</pre>";

$dan = 

// echo "Taj datum je bio " . $datum_arr['yday'] . ". dan u godini " . $datum_arr['year'] . ".";


$avgust = mktime(0,0,0, 8,25,2013);
$sada = time();

$broj_s_prosao = $sada - $avgust;

$dana = $broj_s_prosao / (60 * 60 * 24);

echo "Proslo dana : " . floor($dana);

$proslo = (17 * 24 * 60 * 60) + (22 * 60 * 60);

$timest = $sada - $proslo;

echo "<br> TImestamp pre 17 dana i 22h je: " .$timest;

echo "<br>";















 ?>