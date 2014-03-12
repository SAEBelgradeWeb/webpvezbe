<?php 



	// napravi if koji ce da ispise 3 poruke u zavisnosti od godista (dete, srednje doba, starije doba)
/*	$godina = 75;

	if ($godina < 20) {
		echo "dete";
	} else if ($godina >= 20 && $godina < 60) {
		echo "srednje doba";
	} else {
		echo "starije doba";
	}*/

	//napravi switch koji ce da ispise 4 poruke u zavisnosti od meseca
	$mesec = "mart";

	switch ($mesec) {
	 	case 'januar':
	 		echo "Sad je januar";
	 	break;
	 	
	 	case 'februar':
	 		echo "Sad je februar";
	 	break;
	 	
	 	default:
	 		echo "Sad je neki drugi mesec posle februara";
	 	break;
	 } 




	 function ime_funkcije($var1, $var2){

	 	//ako funkcija nesto vraca 
	 	return "nesto";
	 }


	 function u_kom_si_dobu($godina){
	 		if ($godina < 20) {
				$out =  "dete";
			} else if ($godina >= 20 && $godina < 60) {
				$out = "srednje doba";
			} else {
				$out = "starije doba";
			}
			return $out;
	 }

	 $odgovor = u_kom_si_dobu(80);
	 echo $odgovor;



	 function sabiranje($br1, $br2) {
	 		return $br1 + $br2;
	 }


	 $out = sabiranje(45, 12);
	 echo $out;

	 /*
	 napravite assoc array sa jedom osobom ime, prezime godiste

	 napisite funkciju kojoj posaljemo parametar sta hocemo da izvucemo iz asocijativnog arraya - (ime, prezime ili godiste?) i u zavisnosti od toga ispisite poruku tip vase ime je
*/

		$person = array(
	'ime' => 'Vlada',
	'prezime' => 'Lelicanin',
	'godiste' => 1975
	);



	function iz_arr($par1, $arr){

		//$vrednost = $person['prezime'];
		$vrednost = $arr[$par1];


		if ($par1 == 'ime') {
			$out = "Vase ime je " . $vrednost;
		} else if ($par1 == 'prezime') {
			$out = "Vase prezime je " . $vrednost;
		} else {
			$out = "Vi ste rodjeni " . $vrednost;
		}

		return $out;
	} 

		echo iz_arr('prezime', $person);







	function iz_arr2($par1, $arr){

		//$vrednost = $person['prezime'];
		$vrednost = $arr[$par1];


		switch ($par1) {
			case 'ime':
				$out = "Vase ime je " . $vrednost;
			break;
			
			case 'prezime':
				$out = "Vase prezime je " . $vrednost;
			break;

			default:
				$out = "Vi ste rodjeni " . $vrednost;
			break;
		}



		return $out;
	} 

		echo iz_arr2('prezime', $person);











 ?>