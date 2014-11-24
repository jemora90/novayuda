<!DOCTYPE HTML>
<html lang="en">
    <head>
    	<title> NovaDesk </title>
    	<link rel="icon" type="image/png" href="image/logo-sena.png" />
        <meta charset="utf-8">        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
  		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  		<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
  		<link rel="stylesheet" href="/resources/demos/style.css">
  		<script>
 			$(function() {
    		$( "#accordion" ).accordion();
  			});
 		 </script>
         <link rel="stylesheet" href="css/style.css" type="text/css" />
         <link rel="stylesheet" href="css/menstyle.css" type="text/css" />
</head>
<body>
<center>
<div id="contenedor">
	<div id="encabe">
    <?php
		include("vista/cabezote.php");
	?>
    </div>
    <div id="registror">
    <div></div>
	<div id="contenidorc" class="bodytext">
        <?php 
			$Pac = isset($_GET["pac"]) ? $_GET["pac"]:NULL;
			if (is_null($Pac)){
				include ("vista/vingreso.php");
			}else if ($Pac=="131"){
				include ("vista/vcontra.php");
			}else if ($Pac=="132"){
				include ("vista/vcontra1.php");
			}else if ($Pac=="130"){
				include ("vista/vregistro1.php");
			}
        ?>
	</div>
    </div>
	<div align="cennter" >
	<?php
    include("vista/pie.php");
    ?>
    </div>
</div>
</center>
</body>
</html>