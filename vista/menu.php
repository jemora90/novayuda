<?php
$perusu = isset($_SESSION["perfil"]) ? $_SESSION["perfil"]:NULL;
?>
<div class="smallwhitetext" style="padding:9px;">
<ul id="accordion">
    
	<hr width="0%" />
    <?php if($perusu==2){ ?>
    <li><a href="home.php?pac=109">Inicio</a></li>
    <?php } ?>
    <?php if($perusu==1){ ?>
    <li><a href="home.php?pac=128">Inicio</a></li>
    <li><a>Registros</a>
            <ul>
            <li><a href="home.php?pac=101">Registre Usuarios</a></li>
            <li><a href="home.php?pac=124">Editar Registros</a></li>
            <li></li>
            </ul>
    </li>
	<hr width="0%" />
    <li><a href="home.php?pac=102">Parametro</a></li>
    <li><a>Carga Masiva</a>
    <ul>
    		<li><a href="home.php?pac=112">Programa Masivo</a></li>
    		<li><a href="home.php?pac=113">Ficha Masiva</a></li>
    		<li><a href="home.php?pac=114">Aprendiz Masivo</a></li>
            <li></li>
    </ul>
    </li>
    <!---<li><a href="home.php?pac=108">Encuestas</a></li>-->
    <?php } ?>
    <?php if($perusu==1){ ?>
    <li><a >algo</a>
    <ul>
            <li><a href="home.php?pac=121">Estadistica</a></li>
            <li><a href="home.php?pac=111">Grafica</a></li>          
    </ul>
    </li>
    <?php } ?>
    <hr width="0%" />

</ul> 
</div>