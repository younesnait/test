<html>
<head><title>formulaire de saisie d'abonnés</title></head>
<body>
<?php
include('fonction.php');

?>
<?php
	
	if(isset($_POST['val'])){
		$civil=$_POST['civil'];
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$adresse=$_POST['adresse'];
		$cp=$_POST['cp'];
		$tel=$_POST['tel'];
		$maga=$_POST['maga'];
		
	$sql=' insert into abonnement values("","'.$nom.'","'.$prenom.'","'.$civil.'","'.$adresse.'","'.$cp.'","'.$tel.'","'.$maga.'")';
		
		connectabon();
		 mysql_query($sql) or die ('Error SQL'.$sql.'<br/>'.mysql_error());
		 mysql_close();
?>
<h1>Vous &Ecirc;TES Abonnés !</h1>
<h2>Merci pour votre inscription :</h2>


<?php		 
	}
	
	else{
?>
<h1>ABONNEZ-vous !</h1>
<h2>Entrez les données demandées :</h2>

<form name="inscription" method="POST" Action="abonnement.php">
<table>
	<tr>
		<td><label>Mr</label></td><td><input type="radio"  name="civil" value="Mr"/></td>
	</tr>
	<tr>
		<td><label>Mme</label></td><td><input type="radio"  name="civil" value="Mme"/></td>
	</tr>
	<tr>
		<td><label>Mlle</label></td><td><input type="radio"  name="civil" value="Mlle"/></td>
	</tr>
	<tr>
		<td><label>Nom :</label></td><td><input type="text"  name="nom"/></td>
	</tr>
	<tr>
		<td><label>Prénom :</label></td><td><input type="text"  name="prenom"/></td>
	</tr>
	<tr>
		<td><label>Âge :</label></td><td><input type="text"  name="age"/></td>
	</tr>
	<tr>
		<td><label>Adresse:</label></td><td><input type="text"  name="adresse"/></td>
	</tr>
	
	<tr>
		<td><label>CP:</label></td><td><input type="text"  name="cp" maxlength="5"/></td>
	</tr>
	<tr>
		<td><label>Tel:</label></td><td><input type="text"  name="tel" maxlength="15"/></td>
	</tr>
	<tr>
		<td><label>Veillez cocher le magazine choisi</label></td>
	</tr>
	<tr>
		<td><label>science et vie et terre</label></td><td><input type="radio"  name="maga" value="svt"/></td>
	</tr>
	<tr>
		<td><label>science physique</label></td><td><input type="radio"  name="maga" value="sp"/></td>
	</tr>
	<tr>
		<td><label>science math</label></td><td><input type="radio"  name="maga" value="sm"/></td>
	</tr>
	<tr>
	<td></td><td><input type="submit" value="Valider" name="val"/> </td>
	</tr>
	
</table>
</form>
<?php
}
?>
</body>
</html>