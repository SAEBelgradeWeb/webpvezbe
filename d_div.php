<?php 

	$vreme = $_GET['vreme'];


 ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Strana</title>
	<style>
	.dan {
		background-color: yellow;
	}

	.noc {
		background-color: navy;
	}

	.ludilo {
		background-color: pink;
	}

	.bela_slova {
		color: #fff;
	}
	</style>
</head>
<body class="<?php echo $vreme; ?>">
	<h1 class="<?php 

		if($vreme == "noc") {
			echo "bela_slova";
		}
	 ?>"><?php 

	if ($vreme == "dan") {
		echo "Dobar dan";
	} else if ($vreme == "noc"){
		echo "Dobro vece";
	} else {
		echo "najeli smo se pecurki!";
	}
	 ?></h1>

	 <div>
	 	<?php 

	 		if ($vreme == "ludilo"){
	 			echo '<img src="http://upload.wikimedia.org/wikipedia/commons/c/c2/Amanita_muscaria_%28fly_agaric%29.JPG" width=200 alt="">';
	 		}
	 	 ?>


	 </div>
</body>
</html>