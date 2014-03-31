<?php 
if(!$_POST['email']) {

header("Location: forme.php?greska=1");

}






echo "<pre>";
var_dump($_POST);
echo "</pre>";

// $email = trim($_POST['email']);
$email = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL);

var_dump($email);


$godiste = $_POST['godiste'];

$godiste = filter_var($godiste, FILTER_SANITIZE_NUMBER_INT);

var_dump( $godiste );
// $to = $_POST['to'];
// $subj = $_POST['subject'];
// $msg = $_POST['msg'];

// 	$rezultat = mail($to, $subj, $msg);

// 	if($rezultat) {
// 		echo "Uspesno ste poslali mejl na " . $to;
// 	}
	//mail("v.lelicanin@sae.edu", 'Provera', 'Poruka');

 ?>