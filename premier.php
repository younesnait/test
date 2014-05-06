<html>
<head><title>imc</title></head>
<body>

<form name="form1" method="POST" Action="premier.php">
<table>
	<tr>
		<td><label>Entrer Votre nombre :</label></td><td><input type="text"  name="nombre"/></td>
	</tr>
	
	<tr>
	<td></td><td><input type="submit" value="Verdict" name="verd"/> </td>
	</tr>
	
</table>
</form>
<?php
		//for($i=0;$i<10;$i++){echo 'yna tu es fort en php</br>';}
		function premier($nomb){
		
		for($i=($nomb-1);$i>=2;$i--){
			$r= $nomb%$i;
			if($r==0) return 'nest pas premier';
			
		}
		return 'premier';
		}
		
		if(isset($_POST['verd'])){
			$bg= $_POST['nombre'];
			if(($bg==1) || ($bg==0))
				echo 'ce nombre'.$bg.' nest pas premier <br/>' ;
			else{
			$yna= premier($bg);
			echo 'ce nombre'.$bg.' est '.$yna.'<br/>';
			}
			}
?>
</body>
</html>