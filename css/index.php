<!DOCTYPE HTML>
<html lang="en">
    <head>
    	<title> ..:::: NovaDesk ::::.. </title>
    		<link rel="icon" type="image/png" href="image/logo-sena.png" />
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