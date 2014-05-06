<html>
<head>
<title>Ma page d'accueil </title>
</head>
<body>
<h1>BONJOUR</h1>
<p> Toto fait de l'anglais :</p>
<?php
$branche ='L\'informatique';
$sal = 12;
$moy = 11.5;
$detail1 ='L\' informatique est la branche dans laquelle je travaille.' ;
$detail2='L\' informatique est la branche dans laquelle je souhaite travailler.' ;
$etud =true;
echo '<p>Le salaire auquel j\'aspire pour bien vivre est :<b> '.$sal.'</b></p>';
echo '<p>La branche dans laquelle je travaille ou je souhaite travailler est : <b> '.$branche.'</b></p>';
if($etud==true){
echo ' <p>Pour préciser : <b> '.$detail1.'</b></p>' ;
}
else{
echo ' <p>Pour préciser : <b> '.$detail2.'</b></p>' ;
}
echo '<p>La note moyenne que j\ai obtenue au bac est : <b> '.$moy.'</b></p>';
?>

<form name="inscription" method="post" action="saisie.php">
<table>
<tr>
<td><label>Entrer Votre user :</label></td>
<td><input type="text" name="user"/></td>
</tr>
<tr>
<td><label>Entrer Votre ville :</label></td>
<td><input type="text" name="ville"/></td>
</tr>
<tr type="coalesce">
<td>
<input type="submit" value="OK" name="envoyer"/>
</td>
<tr>
</table>
</form>
<p>
<?php 
if(isset($_POST['envoyer'])){
	$user=$_POST['user'];
	$ville=$_POST['ville'];
	echo 'votre nom est '.$user.' vous êtes originaire de '.$ville.' comon';
	if($ville== 'taf'){
	echo 'maaaaaaaaaaannnn i am from taf too';}
}
?>
</p>
</body>
</html>