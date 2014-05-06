<html>
<head><title>formulaire de saisie utilisateur</title></head>
<body>
<?php
include('fonction.php');

?>
<h1>Inscrivez-vous !</h1>
<h2>Entrez les données demandées :</h2>
<form name="inscription" method="POST" Action="form.php">
<table>
	<tr>
		<td><label>Entrer Votre psaudo :</label></td><td><input type="text"  name="pseudo"/></td>
	</tr>
	<tr>
		<td><label>Garçon</label></td><td><input type="radio"  name="sexe" value="G"/></td>
	</tr>
	<tr>
		<td><label>Fille</label></td><td><input type="radio"  name="sexe" value="F"/></td>
	</tr>
	<tr>
		<td><label>Entrer Votre Âge :</label></td><td><input type="text"  name="age"/></td>
	</tr>
	
	<tr>
	<td></td><td><input type="submit" value="Valider" name="val"/> </td>
	</tr>
	
</table>
</form>
<?php
	
	if(isset($_POST['val'])){
		$ps=$_POST['pseudo'];
		$sex=$_POST['sexe'];
		$age=$_POST['age'];
		$date=date('d.m.y');
	
		connect();
		$sql='insert into ph_user values("","'.$ps.'","'.$sex.'","'.$age.'","'.$date.'")';	
		mysql_query($sql) or die ('Error SQL !'.$sql.'<br/>'.mysql_error());
		
		mysql_close();
	}	
?>
</body>
</html>