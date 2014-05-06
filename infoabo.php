<?php
/*Si user a cliqué sur retour à la page d'accueil, redirection
ATTENTION : un header location se met toujours en toute première instruction (et avant le html)
Il ne tolère pas même un return (ligne vide) auparavant...
*/
if(isset($_POST['Quitter'])){
	header("location: abonnement.php"); 
}
include('fonction.php');
	if(isset($_POST['champ'])){
		$champ=$_POST['champ'];
		}
	else{
		$champ="option1";
		}
	//print_r ($_POST);
?>
<html>
<head><title>administration des abbonnés</title></head>
<body>
<h2>Bonjour à l'administrateur du site.</h2>
<h2>Vous souhaitez savoir :</h2>
<form name="champ" method="post" action="infoabo.php">
	<select name="champ">
        <option value = "option1" <?php if($champ =='option1') { echo 'selected'; } ?>>Toutes les dames et demoiselles abonnées</option>
		<option value = "option2" <?php if($champ =='option2') { echo 'selected'; } ?> >Tous les messieurs abonnés</option>
		<option value = "option3" <?php if($champ =='option3') { echo 'selected'; } ?>>Tous les abonnés par magazine</option>
		<option value = "option4" <?php if($champ =='option4') { echo 'selected'; } ?>>Tous les codes postaux des abonnés</option>
	</select>
			<input type="submit" name="Valider" value="OK"/>
			<input type="submit" name="Quitter" value="Quit"/>
</form>
<?php
	if(isset($_POST['champ'])){
	connect();
	
	if(isset($_POST['Valider'])){
		
			if($champ=="option1"){
				$sql= 'select civil,nom,prenom from abonnement where civil= "Mme"  or civil = "Mlle"';
				$req = mysql_query($sql) or die('musql error'.$sql.'<br/>'.mysql_error());
				
				while($data=mysql_fetch_array($req)){
					$civ=$data['civil'];
					$nm=$data['nom'];
					$prenom=$data['prenom'];
					echo '- '.$civ.' '.$nm.' '.$prenom.'</br>';
				
				}
				mysql_free_result($req);
			}
			elseif($champ=="option2"){
				$sql= 'select civil,nom,prenom from abonnement where civil= "Mr"';
				$req = mysql_query($sql) or die('musql error'.$sql.'<br/>'.mysql_error());
				
				while($data=mysql_fetch_array($req)){
					$civ=$data['civil'];
					$nm=$data['nom'];
					$prenom=$data['prenom'];
					echo '- '.$civ.' '.$nm.' '.$prenom.'</br>';
				
				}
		}
		elseif($champ=="option3"){
			
				$sql= 'select civil,nom,prenom from abonnement where maga="svt"';
				$req = mysql_query($sql) or die('musql error'.$sql.'<br/>'.mysql_error());
				if($req!=NULL){
					echo '<br/>abonnés a la magazine svt<br/>';
				while($data=mysql_fetch_array($req)){
					
					$civ=$data['civil'];
					$nm=$data['nom'];
					$prenom=$data['prenom'];
					echo '- '.$civ.' '.$nm.' '.$prenom.'</br>';
				
				}
				}
				mysql_free_result($req);
				
				$sql= 'select civil,nom,prenom from abonnement where maga="sp"';
				$req = mysql_query($sql) or die('musql error'.$sql.'<br/>'.mysql_error());
				if($req!=NULL){
				echo '<br/>abonnés a la magazine sp<br/>';
				while($data=mysql_fetch_array($req)){
					
					$civ=$data['civil'];
					$nm=$data['nom'];
					$prenom=$data['prenom'];
					echo '- '.$civ.' '.$nm.' '.$prenom.'</br>';
				
				}
				}
				mysql_free_result($req);
				
				$sql= 'select civil,nom,prenom from abonnement where maga="sm"';
				$req = mysql_query($sql) or die('musql error'.$sql.'<br/>'.mysql_error());
				if($req!=NULL){
				echo '<br/>abonnés a la magazine sm<br/>';
				while($data=mysql_fetch_array($req)){
			
					$civ=$data['civil'];
					$nm=$data['nom'];
					$prenom=$data['prenom'];
					echo '- '.$civ.' '.$nm.' '.$prenom.'</br>';
				
				}
				}
				mysql_free_result($req);
		}
		elseif($champ=="option4"){
		$sql= 'select cp from abonnement';
				$req = mysql_query($sql) or die('musql error'.$sql.'<br/>'.mysql_error());
				while($data=mysql_fetch_array($req)){
					$cp=$data['cp'];
					echo '- '.$cp.'</br>';
				
				}
				}
		
	
	
	
	}
		if($champ == 'option1'):
			echo ';e1';
			echo 'ldd1';
		elseif($champ == 'option2'):
			echo ';e2';
			echo 'ldd2';
		elseif($champ == 'option3'):
			echo ';e3';
			echo 'ldd3';
		elseif($champ == 'option4'):
			echo ';e4';
			echo 'ldd4';
		endif;
	
	
	}

?>
</body>
</html>