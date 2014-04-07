<?php 

// SAD CEMO DA SE POVEZEMO SA BAZOM
$db_name = "studenti";
$db_user = "root";
$db_pass = "root";
$db_host = "localhost";//127.0.0.1

$conn = mysql_connect($db_host, $db_user, $db_pass);
if (!$conn) {
	echo "Konekcija ka bazi nije uspela";
	die();
}

if( !mysql_select_db($db_name, $conn) ) {
	echo "Baza koju pokusavate da selektujete ne postoji!";
	die;
}
/* MOZE SVE I DOSTA KRACE NPR OVAKO: 
mysql_connect($db_host, $db_user, $db_pass);
mysql_select_db($db_name);
*/
//UPDATE studenti SET status = 'diplomirao' WHERE id = 1

// ZA SELECT

$sql = "SELECT * FROM studenti";
$rezultat = mysql_query($sql);

echo "BROJ REDOVA : " . $broj_redova = mysql_num_rows($rezultat);

while($podaci = mysql_fetch_assoc($rezultat)){

	echo $podaci['smer'] . "<br>";

	echo $podaci['ime'] . " ";
	echo $podaci['prezime'];

	echo "<br>";
	//echo $podaci->smer ."<br>";
	//var_dump($podaci);
}

mysql_close($conn);

//ZA UPDATE, INSERT I DELETE dovoljno je...
//$sql = "SELECT * FROM studenti";
//$rezultat = mysql_query($sql);

// var_dump($selekcija);
















 ?>