<?php 
require_once("config.php");

if ($_GET['akcija']== "delete" && $_GET['id']) {

	$id = $_GET['id'];

	$sql = "DELETE FROM studenti WHERE id = $id";
	mysql_query($sql);

	header( 'Location: index.php?obrisano=da' ) ;

}
 ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listing svih studenata</title>
	<style>
	table {
		margin: 0 auto;
	}
	th {
		background-color: #7da7d9;
		width: 120px;
	}

	tr {
		height: 50px;
	}
	tr:nth-child(even) {
		background-color: #e2e2e2;
	}

	td {
		padding: 10px;
	}

	td:first-child, td:last-child {
		text-align: center;
	}

	</style>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$('a.delete').on('click', function(e){
			e.preventDefault();
			var lokacija = $(this).attr('href');

			var siguran = confirm("Da li zelite da nastavite. Vase ponasanje moze imati ozbiljne posledice. Kliknite OK ako ste sigurni da zelite da obrisete ovog studenta.");
			if (siguran) {
			window.location = lokacija;
			}
		});


	});

	</script>

</head>
<body>
	<h1>
		Listing studenata
	</h1>

	<a href="edit.php">Dodaj novog studenta</a>
	
	<br>

	<?php 
		
	if ($_GET['obrisano'] !=  "da") {
		$brisanje = "display: none;";
	} else {
		$brisanje = "";
	}
	 ?>
	<span style="color: red; <?php echo $brisanje; ?> ">Uspesno ste obrisali korisnika</span>
	<table>
		<tr>
			<th>
				Rbr
			</th>
			<th>
				Ime
			</th>
			<th>
				Prezime
			</th>
			<th>
				Godina rodjenja
			</th>
			<th>
				Smer
			</th>
			<th>
				Status
			</th>
			<th>
				Akcije
			</th>
		</tr>

<!-- OVDE POCINJE LOOP -->
<?php 
	$sql = "SELECT * FROM studenti";
	$result = mysql_query($sql);
	$rbr = 1;
	while (    $row = mysql_fetch_assoc($result)  ):
 ?>
		<tr>
			<td>
				<?php echo $rbr; ?>.
			</td>
			<td>
				<?php echo $row['ime']; ?>
			</td>
			<td>
				<?php echo $row['prezime']; ?>
			</td>
			<td>
				<?php echo $row['godina_rodjenja']; ?>.
			</td>
			<td>
				<?php echo ucfirst($row['smer']); ?>
			</td>
			<td>
				<?php 
				if ($row['diplomirao'] ==  1) {
					echo "Diplomirao";
				} else {
					echo "Nije diplomirao";
				}
				 ?>
			</td>
			<td>
<a href="edit.php?akcija=edit&id=<?php echo $row['id']; ?>">Edit</a> | <a class="delete" href="?akcija=delete&id=<?php echo $row['id']; ?>">Delete</a>
			</td>
		</tr>

		<?php
		$rbr++; 

	endwhile;
		 ?>
<!-- OVDE SE ZAVRSAVA LOOP -->

	</table>
	
</body>
</html>