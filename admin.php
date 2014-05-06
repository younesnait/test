<html>
<head><title>administration du site</title></head>
<body>
<h2>Choisissez le champ qui vous intéresse et entrez manuellement un critère</h2>
<h4>Une absence de critères vous montre toutes les données du champ</h4>

<form method="post" action="admin.php">
	<select name="champ">
        <?php
			include('fonction.php');
	
			$sql=' show fields from ph_user';
		
			connectabon();
			$req= mysql_query($sql) or die ('Error SQL'.$sql.'<br/>'.mysql_error());
		 
			echo '<h2> Toutes Les champs de ph_user</h2>';
			while($data=mysql_fetch_array($req)){
		
			echo '<option name="'.$data['Field'].'">'.$data['Field'].'</option>';             
			}
			mysql_free_result($req);
		?>
	</select>
			Entrez votre critère de sélection sur ce champ : <input type="text" name="critere"/>
			<input type="submit" name="Valider" value="OK"/>
</form>
        <?php
		if(isset($_POST['Valider'])){
			$champ= $_POST['champ'];
			$crit = $_POST['critere'];
			if($crit=='' || $crit ==NULL){
			$sql = 'select '.$champ.' from ph_user';
			}
			else{
			$sql = 'select * from ph_user where '.$champ.'="'.$crit.'"';
			}
			
			$res = mysql_query($sql) or die('mysql error'.$sql.'<br/>'.mysql_error());
			echo'<h2>Résultat</h2>';
			while( $data= mysql_fetch_array($res)){
			echo 'Pseudo : '.$data['pseudo'].'<br/>';
			echo 'sexe : '.$data['sexe'].'<br/>';
			echo 'age : '.$data['age'].'<br/>';
			echo 'date d\'inscription : '.$data['date_inscri'].'<br/>';
			//print_r($data);
			//echo'<br/>';
			}
			mysql_free_result($res);
			mysql_close();
		}
		?>

</body>
</html>