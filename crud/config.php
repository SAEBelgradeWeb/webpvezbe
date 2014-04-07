<?php 
error_reporting(2);

$db_name = "studenti2";
$db_user = "root";
$db_pass = "root";
$db_host = "localhost";


/******** ISPOD NE DIRAJ ************/

$conn = mysql_connect($db_host, $db_user, $db_pass);

if (!$conn) {
	echo "Nije uspelo";
	die();
}

$selekcija = mysql_select_db($db_name);

if (!$selekcija) {
	echo "Nije selektovano";
	die();
}

 ?>