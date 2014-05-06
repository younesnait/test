<html>
<head><title>Info sur les inscrit sur le site</title></head>
<body>
<?php
include('fonction.php');
	
	$sql=' select * from ph_user where sexe ="G"';
		
		connectabon();
		 $req= mysql_query($sql) or die ('Error SQL'.$sql.'<br/>'.mysql_error());
		 
		echo '<h2> Toutes Les Fille Inscrites </h2>';

			while($data= mysql_fetch_array($req)){
			echo 'Pseudo : '.$data['pseudo'].'<br/>';
			echo 'sexe : '.$data['sexe'].'<br/>';
			echo 'age : '.$data['age'].'<br/>';
			echo 'date d\'inscription : '.$data['date_inscri'].'<br/>';
			}
		mysql_free_result($req);
	
		 mysql_close();		 
	
	
	
?>

</body>
</html>