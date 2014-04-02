<?php 
	// echo "<pre>";
	// var_dump($_FILES);
	// echo "</pre>";

	if(is_uploaded_file($_FILES['slika']['tmp_name'])) {
	$tmp = $_FILES['slika']['tmp_name'];
	
		$ime_fajla = str_replace(" ", "_", $_FILES['slika']['name']);
		$new = getcwd() ."/slike/" . time() . "_". $ime_fajla;

		$uspelo = move_uploaded_file($tmp, $new);

		if ($uspelo) echo "Bravo!";
	} else {
		echo "To je greska neka! ";
	if ($_FILES['slika']['error'] ==  4) echo "Niste poslali fajl";
	if ($_FILES['slika']['error'] == 1 OR $_FILES['slika']['error'] == 2) echo "Fajl je veci od dozvoljene velicine";
	if ($_FILES['slika']['error'] == 3) echo "Upload fajla nije uspeo do kraja";
	}
 ?>

<form action="" method="POST" enctype="multipart/form-data">
	
	<label>Uploaduj sliku</label> <input type="file" name="slika">

	<br>

	<input type="submit">
</form>