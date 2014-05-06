<html>
<head><title>test</title></head>
<body>
<?php
	function color($nbr){
		if($nbr<10){
		echo '<p style="color:red">'.$nbr.'</p>';
		}
		elseif($nbr>=15){
		echo '<p style="color:green">'.$nbr.'</p>';
		}
		else
		{
		echo $nbr;
		}
		
	}
	function moyenne($nbr1,$nbr2,$nbr3){
	$moy= ($nbr1+$nbr2+$nbr3)/3;
	echo 'Votre moyenne est : '.$moy;
	
	}
	
	$notes = array(1,2,3,6,7,8,9,10,12,18,17,16,20);
	foreach($notes as $note){
		echo ' '.color($note);
	}
	
	moyenne(2,6,99);
	
?>
<h1>test de l'IMC (indice de masse corporelle)</h1>
<form name="form1" method="POST" Action="testphp.php">
<table>
	<tr>
		<td><label>Entrer Votre nom :</label></td><td><input type="text" value="nait" name="nom"/></td>
	</tr>
	<tr>
		<td><label>Entrer Votre prénom :</label></td><td><input type="text" value="younes" name="prenom"/></td>
	</tr>
	<tr>
		<td><label>Entrer Votre âge		:</label></td><td><input type="text" value="21" name="age"/></td>
	</tr>
	<tr>
		<td><label>Entrer Votre ville :</label></td><td><input type="text" value="tafraout" name="ville"/> </td>
	</tr>
	<tr>
		<td><label>Entrer Votre activité :</label></td><td><input type="text" value="php" name="activite"/> </td>
	</tr>
	<tr>
	<td></td><td><input type="submit" value="OK" name="sub"/> </td>
	</tr>
	
</table>
</form>

<?php
		if(isset($_POST['sub'])){
		foreach($_POST as $index=>$elemnt){
			if($index!='sub'){
			echo ' '.$index.' : '.$elemnt.'<br/>';
			}
		}
		}
?>
</body>
</html>