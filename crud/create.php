<?php 
require_once("config.php");

if ($_POST) {
	$ime = $_POST['ime'];
	$prezime = $_POST['prezime'];
	$godiste = $_POST['godiste'];
	$smer = $_POST['smer'];
	if ($_POST['diplomirao']) {
		$diplomirao = "1";
	} else {
		$diplomirao = "0";
	}

	$sql = "INSERT INTO studenti SET ime = '$ime', prezime = '$prezime', godina_rodjenja = '$godiste', smer = '$smer', diplomirao = '$diplomirao'";
	mysql_query($sql);
}

?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Unos novih studenata</title>
</head>
<body>
	<h1>Unos novih studenata</h1>
	<form action="" method="POST">
		<fieldset>
		Ime: <input type="text" name="ime"><br>
		Prezime: <input type="text" name="prezime"><br>
		Godiste: <input type="text" name="godiste"><br>
		Smer: 
		<select name="smer">
			<option value="">--- ODABERI SMER ----</option>
			<option value="web">Web</option>
			<option value="animacija">Animacija</option>
			<option value="audio">Audio</option>
			<option value="film">Film</option>
		</select>
		<br>
		Diplomirao: <input type="checkbox" name="diplomirao">

		<br>
		<input type="reset"> <input type="submit" value="Unesi">
		</fieldset>
	</form>





</body>
</html>