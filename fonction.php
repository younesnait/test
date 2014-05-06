<?php
	function connect(){
		$base= mysql_connect('localhost','root','');
		mysql_select_db('test',$base);
	}
	
	function connectabon(){
	$baseabon= mysql_connect('localhost','root','');
	mysql_select_db('test',$baseabon);
	}

?>