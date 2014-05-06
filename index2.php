<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head><title>Pointage wep application </title>
<meta http-equiv="content-type" content="text/x-component .htc; charset=iso-8859-1" />
<link rel="stylesheet"  media="screen" type="text/css"  href="css/style1.css" />
<script type="text/javascript" src="javascript.js"></script>
</head>
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="css/ie.css" />
<![endif]-->

<body>
<div id="header"><!-- header start-->
    <div class="entete"><!-- upper part of the header=logo+pannier+recherche   start-->
       <div class="logo_entete">
           <p>
		     <a href="#" title=""><!-- it's gonna be the same link as below-->
			   <img alt="" src=""/>
			 </a>
		     <a href="#" title="">
		       <span class="title_logo">LOGO</span>
		     </a>
		  </p> 
       </div>
	  
    </div><!-- upper part of the header=logo+pannier+recherche   end-->
    <!-- lower part of the header=menu principal   start-->
	<div class="menu">
	   <ul>
           <li class="Pointage">
				<a href="#" title="pointage">pointage</a>
		   </li>
	       <li class="historique" >
				<a href="#" title="historique"  >Historique</a>
		   </li>
	       <li class="statistique">
				<a href="#" title="statistique" >Statistique</a>
		   </li> 
	       <li class="deconnection">
				<a href="#" title="deconnection">Deconnexion</a>
		   </li>
	       
       </ul>-->
	 </div>
		  	 
<!-- lower part of the header=menu principal   end  -->
				
</div> <!-- header end-->
<div id="corps"><!-- corps start-->
	       <div class="corps-top"><!-- div de imagehome starts-->
			 <h1 class="bonjours" ><a href="#" title="Bonjour utilisteurs">Bonjours ....</a></h1> 
			 <form name="inscription" method="POST" Action="form.php">
				<table>
					<tr>
						<td><input type="text"  name="login" value="Login"/></td>
					</tr>
					<tr>
						<td><input type="text"  name="mdpass" value="mot de passe"/></td>
					</tr>
					
	
					<tr>
						<td></td><td><a href="index2.php"><input type="submit" value="Valider" name="val" /></a> </td>
					</tr>
	
					</table>
			</form>	
			 
		   </div><!-- div de imagehome starts-->
		   
		
</div><!-- fin corps-->
<div id="footer"><!--footer starts-->
	                
					
				  <div class="paragraph_footer"><!--footer paragraphe starts-->
                      <p>
					     <a  href="#" >
						     <span class="title1_logo">Support : XX@mail.com</span> 
							 </a>
							 <a  href="#" >
						     <span class="title1_logo">Mentions légales</span> 
							 </a>
					</p>
					
                  </div><!--footer paragraphe ends-->
				 
				  

     </div>	<!--footer end-->
<script type="text/javascript" src="js/DD_roundies_0.0.2a-min.js"></script><!--script pour ie coins arrondis-->
<script>
DD_roundies.addRule('.pannier,.recherche_entete,.input-text,.menu,#corps,.item-cyclique','10px');
</script>
</body>
</html>