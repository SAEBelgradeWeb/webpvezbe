<?php 
error_reporting(0);
if($_GET['greska'] == 1) {
	echo "Niste dobro uneli sva polja";
}
 ?>


<form action="obrada.php" method="POST" id="forma">

	
	<label for="subject">Email:</label> 
	<input type="text" id="subject" name="email"><br>
	

	<label>Password:</label> 
	<input type="password" name="pass"><br>
	
	<label for="msg">Message:</label> 
	<textarea  name="msg" id="msg" cols="30" rows="10"></textarea><br>


	<label>Godiste:</label> 
	<input type="text" name="godiste"><br>

	Pol
	<br>

	Muski: <input type="radio" name="pol" value="muski">
	Zenski: <input type="radio" name="pol" value="zenski">

	Grad
	<br>
	<select name="grad[]" id="" multiple>
		<option value="">--- MOLIMO SELEKTUJTE GRAD ---</option>	
		<option value="beograd">Beograd</option>	
		<option value="nis">Nis</option>	
		<option value="novisad">Novi Sad</option>	
		<option value="krusevac">Krusevac</option>	


	</select>

	<br>

	Koje voce volis? 
	Malina <input type="checkbox" name="voce[]" value="malina">
	Kruska<input type="checkbox" name="voce[]" value="kruska">
	Sljiva<input type="checkbox" name="voce[]" value="sljiva">
	Mango<input type="checkbox" name="voce[]" value="mango">
	<br>
	<input type="reset">
	<input type="submit" value="Posalji">

</form>

