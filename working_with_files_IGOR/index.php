<?php

	//upis na noviji nacin	
	// $putanja_ka_fajlu = 'posete.txt';
	// $za_upis = 'upravo upisali pomocu deprecetated funkcije';
	// $otvaranje = fopen($putanja_ka_fajlu, 'w+');
	// $rezultat = fwrite($otvaranje, $za_upis);
	// echo $rezultat;
	// fclose($otvaranje);

	// $niz = new Array();
	// $niz = [];

	//upis na zastareli nacin
	// $data = file_put_contents($putanja_ka_fajlu, $za_upis);
	// echo $data;

	//kopiranje fajla
	// $putanja_ka_novokreiranom_fajlu = 'posete_2.txt';
	// $kopiranje = copy('posete.txt', 'posete_45.txt');
	// echo $kopiranje;
	
	//renaming fajla
	// $putanja_ka_preimenovanom_fajlu = 'posete_2.txt';
	// $renaming = rename($putanja_ka_fajlu, $putanja_ka_preimenovanom_fajlu);
	// echo $renaming;
	
	//brisanje fajla
	// $putanja_ka_fajlu = 'body_bac.png';
	// $rezultat = unlink($putanja_ka_fajlu);
	// echo $rezultat;

	//kreiranje foldera
	// $putanja_ka_folderu = 'assets';
	// $rezultat = mkdir($putanja_ka_folderu);
	// echo $rezultat;
	
	//iscitavanje foldera
	$putanja_ka_folderu = 'assets';
	$otvaranje = opendir($putanja_ka_folderu);

	$brojac = 0;
	while ( readdir($otvaranje) ) {
		$rezultat = readdir($otvaranje);
		$brojac++;
		echo $brojac . '. '. $rezultat . '<br>';
	}

	// echo $brojac;








?>