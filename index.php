<?php 

	//napravite jedan numericki array i dampujte
	$automobili = array('Ford', 'Honda', 'Lancia', 'Dachia', 'BMW', 'Audi');
	echo "<pre>";
	var_dump($automobili);
	echo "</pre>";

	//napravite jedan asocijativni array i dampujte - politicar
	$sps = array(
		'ime' => 'Ivica',
		'prezime' => 'Dacic',
		'stranka' => 'SPS',
		'godina' => 40
		);

	$ldp = array(
		'ime' => 'Cedomir',
		'prezime' => 'Jovanovic',
		'stranka' => 'LDP'
		);
	
	$nds = array(
		'ime' => 'Boris',
		'prezime' => 'Tadic',
		'stranka' => 'NDS'
		);


	$politicari = array($sps, $ldp, $nds);

	echo "<pre>";
	var_dump($politicari);
	echo "</pre>";

	//kako doci do Dacica?
	echo $politicari[0]['prezime'];

	//izbacite Ford i dampujte
	array_shift($automobili);

	//izbaci i poslednji elemenat
	array_pop($automobili);


	//ubaci Fiat na prvo mesto
	array_unshift($automobili, 'Fiat');

	//ubaci Mazdu na poslednje mesto
	array_push($automobili, 'Mazda');

	//umesto Dacie stavi Mini
	array_splice($automobili, 3, 1, "Mini");


	echo "<pre>";
	var_dump($automobili);
	echo "</pre>";

	// EKSPLODIRATI STRING

	$zivotinje = "Macka, Pas, Konj, Krava";

	$ziv_ar = explode(", ", $zivotinje);

		echo "<pre>";
	var_dump($ziv_ar);
	echo "</pre>";

	//IMPLODIRAJTE POLITICARE

	$pol_string = implode(", ", $ldp);

	var_dump($pol_string);

















 ?>