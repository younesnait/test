<html>
<head><title>imc</title></head>
<body>
<?php
		//for($i=0;$i<10;$i++){echo 'yna tu es fort en php</br>';}
		if(isset($_POST['verd'])){
			$yna= paireimpaire($_POST['nombre']);
			echo $yna.'<br/>';
			
		switch($yna){
		case 'paire<br/>': 
			echo 'paire maza<br/>';
			break;
		case 'impaire<br/>': 
			echo 'impaire mamaza</br>';
		}
			}
?>
<form name="form1" method="POST" Action="imc.php">
<table>
	<tr>
		<td><label>Entrer Votre nombre :</label></td><td><input type="text" value="11" name="nombre"/></td>
	</tr>
	<tr>
		<td><label>le verdict est :</label></td><td><input type="text" value="" name="verdict"/></td>
	</tr>
	<tr>
	<td></td><td><input type="submit" value="Verdict" name="verd"/> </td>
	</tr>
	
</table>
</form>

<?php
//include('testphp.php');
//moyenne(1,234,56789);
//moyenne(1,234,56789);
	function paireimpaire($nbv){
		
		if(($nbv%2)==0){
		$verdict='paire<br/>';
		}
		else{
		$verdict = 'impaire<br/>';
		}
	return $verdict;
	}
	
	echo paireimpaire(12);
	echo paireimpaire(1);
	echo paireimpaire(0);
?>

<h1>test de l'IMC (indice de masse corporelle)</h1>
<form name="form1" method="POST" Action="imc.php">
<table>
	<tr>
		<td><label>Entrer Votre prénom :</label></td><td><input type="text" value="younes" name="prenom"/></td>
	</tr>
	<tr>
		<td><label>Entrer Votre taille (X.XX)m :</label></td><td><input type="text" value="0.00" name="taille"/></td>
	</tr>
	<tr>
		<td><label>Entrer Votre poids en (kg) :</label></td><td><input type="text" value="00" name="poids"/> </td>
	</tr>
	<tr>
	<td></td><td><input type="submit" value="OK" name="sub"/> </td>
	</tr>
	
</table>
</form>
<?php
		if(isset($_POST['sub'])){
			if($_POST['taille']==0 || $_POST['poids']==0){
			echo 'Veillez entrz une taille et un poids différents de zero';}
			else{
			$prenom=$_POST['prenom'];
			$poids=$_POST['poids'];
			$taille=$_POST['taille'];
			$imc=$poids/($taille*$taille);
				echo'<h5>Bonjours '.$prenom.' </h5>';
				echo '<h5>Vous avez un indice de masse corporelle imc = '.$imc.'</h5>';
				if($imc<=16.5){echo '<p>Vous avez Dénutrition</p>';}
				elseif($imc<=18.5){echo '<p>Vous avez Maigreur</p>';}
				elseif($imc<=25){echo '<p>Vous avez Corpulence normale</p>';}
				elseif($imc<=30){echo '<p>Vous avez Surpoids</p>';}
				elseif($imc<=35){echo '<p>Vous avez Obésité modérée</p>';}
				elseif($imc> 40){echo '<p>Vous avez Obésité morbide ou massive</p>';}
				
			}
		}	
?>
<?php
$semaine=array('lunes','martes','miercoles','juebes','viernes','sabado','domingo');
echo '<p>'.$semaine[1].'</p>';
$adresse=array();
$adresse['nom']='NAIT';
$adresse['prenom']='Younes';
$adresse['tel']='08937633903';
$adresse['ville']='tafraout';
echo $adresse['nom'].$adresse['prenom'].$adresse['tel'].$adresse['ville'];
$agenda= array($adresse,$semaine);
$adresseyna=$agenda[0];
  echo '<br/>'.$adresseyna['nom'];
  echo '<br/>'.$agenda[0]['prenom'];
  echo '<br/>'.$agenda[1][3];
  foreach($semaine as $jour){
  echo '- '.$jour.'<br/>';
  }
?>
<?php
$adresse0 = array();
//on le remplit
$adresse0 ['nom']='ZERO';
$adresse0 ['prenom']='Toto';
$adresse0 ['num'] = 10;
$adresse0 ['rue'] = 'rue des rosiers';
$adresse0 ['cp'] = 94000;
$adresse0 ['ville'] = 'IVRY-SUR-SEINE';
$adresse1 = array();
//on le remplit
$adresse1 ['nom']='AIN';
$adresse1 ['prenom']='Anne';
$adresse1 ['num'] = 11;
$adresse1 ['rue'] = 'rue des moineaux';
$adresse1 ['cp'] = 57000;
$adresse1 ['ville'] = 'METZ';
$adresse2 = array();
//on le remplit
$adresse2 ['nom']='DEUX';
$adresse2 ['prenom']='Al';
$adresse2 ['num'] = 2;
$adresse2 ['rue'] = 'rue des arbres';
$adresse2 ['cp'] = 88000;
$adresse2 ['ville'] = 'EPINAL';
$adresse3 = array();
//on le remplit
$adresse3 ['nom']='TROIS';
$adresse3 ['prenom']='Léa';
$adresse3 ['num'] = 3;
$adresse3 ['rue'] = 'rue des éléphants';
$adresse3 ['cp'] = 69000;
$adresse3 ['ville'] = 'LYON';
$adresse4 = array();
//on le remplit
$adresse4 ['nom']='DUPONT';
$adresse4 ['prenom']='Mick';
$adresse4 ['num'] = 4;
$adresse4 ['rue'] = 'rue des églantines';
$adresse4 ['cp'] = 93000;
$adresse4 ['ville'] = 'SAINT-DENIS';
//on déclare et remplit l'agenda avec toutes les adresses précédentes :
$agenda=array($adresse0,$adresse1,$adresse2,$adresse3,$adresse4);
foreach($agenda as $index=>$semaine){
	foreach($semaine as $index=>$elemnt){
		echo '- '.$index.' '.$elemnt.' ';
	}
echo '<br/>';
}

?>
<?php
		foreach($_POST as $index=>$elem){
		echo ' '.$index.' : '.$elem.'<br/>';}
?>
</body>
</html>