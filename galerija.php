<?php 
	error_reporting(2);

	$dir = getcwd();
	$dir_slike = $dir ."/slike";
	
	//UPLOAD SLIKE

	if($_FILES['slika']['tmp_name']) {
		$tmp_name = $_FILES['slika']['tmp_name'];
		$new_name = str_replace(" ", "_", $_FILES['slika']['name']);
		$new_name = time() . "_" . $new_name;
		$cela_putanja = $dir_slike . "/" . $new_name;
		move_uploaded_file($tmp_name, $cela_putanja);
	}


?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Galerija</title>
</head>
<body>
	<?php if($_POST['pass'] != "jasam"): ?>
	<form action="" method="POST">
			Sifra: <input type="password" name="pass">
			<input type="submit" value="Otkljucaj">

	</form>
	
	<?php endif; ?>


	<?php if($_POST['pass'] == "jasam") { ?>

	<form action="" method="POST" enctype="multipart/form-data">
		<label for="slika">Uploaduj sliku za galeriju</label>
		<input type="file" name="slika">
		<br>
		<input type="submit" value="Uploaduj sliku">

	</form>

	<?php } ?>
<?php 	
	$dir_handle = opendir($dir_slike);

	while ($fajl = readdir($dir_handle)) {
		if ($fajl != "." AND $fajl != "..") {
		echo '<img src="slike/'.$fajl.'" alt="" width="120">';
		}
	}
 ?>
	
</body>
</html>