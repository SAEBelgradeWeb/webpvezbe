<?php 
	$proizvod1 = array(
		'id' => 1,
		'naziv' => 'Muska majica 1',
		'opis' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, quae, dolorem, dolor, pariatur dignissimos adipisci architecto doloribus repudiandae inventore porro ad eveniet animi magni. Reiciendis ut sint aut impedit porro.',
		);

	$proizvod2 = array(
		'id' => 2,
		'naziv' => 'Muska majica 2',
		'opis' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, quae, dolorem, dolor, pariatur dignissimos adipisci architecto doloribus repudiandae inventore porro ad eveniet animi magni. Reiciendis ut sint aut impedit porro.',
		);

	$proizvod3 = array(
		'id' => 3,
		'naziv' => 'Muska majica 3',
		'opis' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, quae, dolorem, dolor, pariatur dignissimos adipisci architecto doloribus repudiandae inventore porro ad eveniet animi magni. Reiciendis ut sint aut impedit porro.',
		);

	$proizvod4 = array(
		'id' => 4,
		'naziv' => 'Muska majica 4',
		'opis' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, quae, dolorem, dolor, pariatur dignissimos adipisci architecto doloribus repudiandae inventore porro ad eveniet animi magni. Reiciendis ut sint aut impedit porro.',
		);

	$proizvod5 = array(
		'id' => 5,
		'naziv' => 'Muska majica 5',
		'opis' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, quae, dolorem, dolor, pariatur dignissimos adipisci architecto doloribus repudiandae inventore porro ad eveniet animi magni. Reiciendis ut sint aut impedit porro.',
		);

	$proizvodi = array($proizvod1, $proizvod2, $proizvod3, $proizvod4, $proizvod5);

	$proizvodi[0]['naziv'];

// IZVUCI ONAJ PROIZVOD KOJI NAM TREBA?

	//echo $_GET['id'];

	$id = $_GET['id'] - 1;

	//echo $proizvodi[$id]['naziv'];
 ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Proizvod</title>
</head>
<body>

	<h1><?php echo $proizvodi[$id]['naziv']; ?></h1>
	<p><?php echo $proizvodi[$id]['opis'] ?></opis>
	
</body>
</html>