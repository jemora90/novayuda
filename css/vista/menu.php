<?php
$perusu = isset($_SESSION["perfil"]) ? $_SESSION["perfil"]:NULL;
?>
<html>
	<head>
        <link rel="stylesheet" href="css/stylemenu.css">
        <link rel="stylesheet" href="css/styleicon.css">
        </head>
	<body>
    <header>
		<nav>
			<ul>
            	<?php if($perusu==3){ ?>
            	<li><a href="home.php?pac=106"><span class="segundo"><i class="icon icon-vcard"></i></span>Nuevo Incidente </a>
                <li><a href="#"><span class="segundo"><i class="icon icon-vcard"></i></span>Informacion Personal  </a>
                <li><a href="#"><span class="septimo"><i class="icon icon-logout"></i></span>Salir</a></li>

                <?php } ?>
                
                <?php if($perusu==2){ ?>
				<li><a href=""><span class="primero"><i class="icon icon-house"></i></span>Tickets Asignados</a></li>
                <li><a href="home.php?pac=106"><span class="primero"><i class="icon icon-house"></i></span>Nuevo Incidente</a></li>
                <li><a href="#"><span class="septimo"><i class="icon icon-logout"></i></span>Salir</a></li>


                <?php } ?>
               	
                <?php if($perusu==1){ ?>
				<li><a href="#"><span class="segundo"><i class="icon icon-vcard"></i></span>Modulo Registro</a>
					<ul>
						<li><a href="home.php?pac=105">Registro Masivo</a></li>
						<li><a href="">Resgistro Por Usuario</a></li>
                 
					</ul>
                  
				</li>
                <li><a href=""><span class="primero"><i class="icon icon-house"></i></span>Modulo Incidentes</a></li>
                <ul>
						<li><a href="home.php?pac=107">Lista de Incidentes</a></li>
						<li><a href="home.php?pac=106">Nuevo Incidente</a></li>
                        
                 
					</ul>
                  
                </li>
				<li><a href="home.php?pac=104"><span class="tercero"><i class="icon icon-hourglass"></i></span>Perfil</a></li>
				<li><a href="home.php?pac=102 "><span class="cuarto"><i class="icon icon-hourglass"></i></span>Parametros</a></li>
				<li><a href="home.php?pac=103"><span class="quinto"><i class="icon icon-mail"></i></span>Areas Empresariales</a></li>
                <li><a href="#"><span class="sexto"><i class="icon icon-mail"></i></span>Contacto</a></li>
                <li><a href="#"><span class="septimo"><i class="icon icon-logout"></i></span>Salir</a></li>
                <?php } ?>
			</ul>
		</nav>
	</header>
    </body>
</html>