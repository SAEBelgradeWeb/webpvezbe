<?php 

	// function lociranje($ime, $prezime="Lelicanin", $godina = "79") {


	// 	///ovde racunala
	// 	$lon = "44.3290891";
	// 	$lat = "20.3249832";

	// 	$out = array($lon, $lat);

	// 	/* 
	// 		array{
	// 			[0] => "44.3290891",
	// 			[1] => "20.3249832"
	// 		}
	// 	*/
	// 	return $out;
	// }


	// //$rezultat = lociranje("127.0.0.1");


	// $name = "Pera"; 
	
	// lociranje($name, "Zivkovic", "80");


	// $globalna = 50;

	// function prva(){
	// 	$x = 10;

	// }

	// function druga(){
	// 	$x = 14;
	// 	$godiste = "1934";
	// 	if ($user == "m"){
	// 		return "Musko";
	// 	} else {
	// 		return "Zensko";
	// 	}
	// }

	// echo $godiste;




	// $x = 10;
	// function someFunc() { 
	// 	$x = 20;
	// 	echo $x;	// 20
	// } 

	// someFunc();
	// echo $x;

	// $ime = "Pera";
	// $prezime = "Petrovic";

	// function ispisImena(){
	// 	global $ime, $prezime;

	// 	echo $ime;
	// }


	// function saberi($br1, $br2){

	// 	$rezultat = $br1 + $br2;

	// 	return $rezultat;
	// }

	// $rez = saberi(7, 8);

	$povrce = array('luk', 'cvekla', 'kupus', 'celer', 'krompir');
	$voce = array('jabuka', 'kruska', 'sljiva', 'visnja', 'pomorandza');

	function ispis_niza($array) {
		foreach ($array as $element) {
			echo $element . "<br>";
		}
	}

	//ispis_niza($voce);

/*
	function pretrazi_niz($niz, $rec){

		foreach ($niz as $value) {

			if ($value == $rec) {
				$ima = true;
				return $ima;
			} 
		} 

		

	}

	$jel_naso = pretrazi_niz($voce, "visnjas");

	var_dump($jel_naso);*/



	function ima_li_dacica($rec){

		$strana = file_get_contents("http://www.b92.net/");

		$gde = strpos($strana, $rec);

		if ($gde) {
			echo "Ima";
		} else {
			echo "Nema";
		}
	}

	ima_li_dacica("");









 ?>