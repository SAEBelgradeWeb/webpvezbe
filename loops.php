<?php 

	echo "Prvi eho<br>";
	// FOR LOOP
	for($i = 1; $i <= 10; $i++){
		echo  "$i. Tackica<br>";
		//echo $i;
	}

	while ($red_u_bazi){

	}
	echo "<br>Drugi Echo<br>";


	$automobili = array(
		'Ivica' => 'Audi',
		'Marica' => 'Mini',
		'Perica' => 'Trotinet'

		);
	//$automobili['Ivica']
	///var_dump($automobili);
	echo "<br>";

	foreach ($automobili as $key => $automobil) {
		if($key == "Marica") {
			echo "<br>";
			echo $automobil;
			echo "<br>";
		}
	
	}

	$voce = array('banana', 'kivi',$automobili,  'ono zuto kinesko', $automobili);

	// $sve_zajedno = array($automobili, $voce);
	echo "<br>";
	var_dump($voce);



	// NAPRAVITI FOREACH KOJI CE DA PRODJE KROZ OBA NIVOA ARRAY-a
	echo "<ul>";
	
	foreach ($voce as $key => $value) {
		if (is_array($value)) {
			echo "<ul>";
			foreach ($value as $key2 => $value2) {
				echo "<li>" . $value2. "</li>";
			}
			echo "</ul>";
			
		} else {
			echo "<li>" . $value . "</li>";
		}

	}

	echo "</ul>";






$imena = array('Pera', 'Marko', 'Laza', 'Jova', 'Mika');

?>

<style>
	table td {
		border: 1px solid black;
		width: 200px;
	}

</style>
	<table>
		<tr>
			<th>Rbr</th>
			<th>Ime</th>
		</tr>
<?php
		$rbr = 1;
		foreach($imena as $key => $ime) {
?>
		<tr>
			<td><?php echo $rbr; ?>.</td>
			<td><?php echo $ime; ?></td>
		</tr>
<?php 
			$rbr++;
		} 

?>

	</table>



<?php 



	// if ( 2 == 3 ) : 
	// 	echo "Dva je tri";
	// else:
	// 	laskdlak

	// endif
	
	// ("vlada" == $ime) ? echo "jeste" : echo "nije";

	// if(2 < 4) {
	// 	echo "jeste";
	// } else {
	// 	echo "nije";
	// }

	

$prva = array(
	'title' => 'Jedrilica 1',
	'url' => 'http://www.deroeck.co.uk/plane-pictures-light/Grob-109-Vigilant-(8)-03.jpg'
	);

$druga = array(
	'title' => 'Jedrilica 2',
	'url' => 'http://www.exchange3d.com/images/uploads/aff1775/glider_5.jpg0da4c69e-e51a-40ce-96bc-8b6f6c92f769Large.jpg'
	);


$treca = array(
	'title' => 'Jedrilica 3',
	'url' => 'http://thumbs.dreamstime.com/x/glider-air-14493117.jpg'
	);

$slike = array($prva, $druga, $treca);

//echo $slike[0]['url'];

//var_dump($slike);

foreach ($slike as $slika) {
	?>
	 <img src="<?php echo $slika['url']; ?>" title="<?php echo $slika['title']; ?>" alt=""> 
	<?php
}

 ?>

<style>
	.plavo {
		color: blue;
	}

	.crveno {
		color: red;
	}

</style>



<!-- <div class="plavo">Vlada</div>
<div class="crveno">Vlada</div>
 -->

<?php 

	for($i=0; $i < 10; $i++) {


		if ( ($i % 2) == 0  ) {
			$klasa = "plavo";
		} else {
			$klasa = "crveno";
		} 
		echo '<div class="' .$klasa .'">Vlada</div>';

	}



 ?>









