<?php 
require_once("config.php");

if ($_POST) {
	$id = $_POST['id'];
	$ime = $_POST['ime'];
	$prezime = $_POST['prezime'];
	$godiste = $_POST['godiste'];
	$smer = $_POST['smer'];
	if ($_POST['diplomirao']) {
		$diplomirao = "1";
	} else {
		$diplomirao = "0";
	}

	if($_GET['akcija'] == "edit") {
	$sql = "UPDATE studenti SET ime = '$ime', prezime = '$prezime', godina_rodjenja = '$godiste', smer = '$smer', diplomirao = '$diplomirao' WHERE id = $id";
	} else {
	$sql = "INSERT INTO studenti SET ime = '$ime', prezime = '$prezime', godina_rodjenja = '$godiste', smer = '$smer', diplomirao = '$diplomirao'";
	}
	mysql_query($sql);

	header( 'Location: index.php' ) ;
}

if ($_GET['akcija'] == "edit"){
	$id = $_GET['id'];

	$sql = "SELECT * FROM studenti WHERE id = $id";
	$result = mysql_query($sql);
	$korisnik = mysql_fetch_assoc($result);
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
			<input type="hidden" name="id" value="<?php echo $korisnik['id']; ?>" >
		Ime: <input type="text" name="ime" value="<?php echo $korisnik['ime']; ?>"><br>
		Prezime: <input type="text" name="prezime" value="<?php echo $korisnik['prezime']; ?>"><br>
		Godiste: <input type="text" name="godiste" value="<?php echo $korisnik['godina_rodjenja']; ?>"><br>
		Smer: 
		<select name="smer">
			<option value="">--- ODABERI SMER ----</option>
			<option value="web" <?php if($korisnik['smer'] == "web") echo "selected"; ?>>Web</option>
			<option value="animacija" <?php if($korisnik['smer'] == "animacija") echo "selected"; ?>>Animacija</option>
			<option value="audio" <?php if($korisnik['smer'] == "audio") echo "selected"; ?>>Audio</option>
			<option value="film" <?php if($korisnik['smer'] == "film") echo "selected"; ?>>Film</option>
		</select>
		<br>
		<?php 
		if($korisnik['diplomirao'] == 1) {
			$chk = "checked";
		} else {
			$chk = "";
		}

		 ?>
		Diplomirao: <input type="checkbox" name="diplomirao" <?php echo $chk; ?>>

		<br>
		<input type="reset"> <input type="submit" value="Unesi">
		</fieldset>
	</form>





</body>
</html>