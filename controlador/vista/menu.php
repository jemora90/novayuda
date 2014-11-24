<?php
$perusu = isset($_SESSION["perfil"]) ? $_SESSION["perfil"]:NULL;
?>
<div id="accordion">
 <?php if($perusu==2){ ?>
  <h3>Inicio</h3>
  <div>
  <p>¡Aqui Podras encontrar las soluciones a tus problemas!</p>
  </div>
  <h3>Requerimientos</h3>
  <div>
	<div class="re" align="center"><a href="#">Registro</a></div>
  </div>
 <?php } ?>
 <?php if($perusu==1) { ?>
  <h3>Inicio</h3>
  <div>
	<p>¡Trabajos por hacer!</p>
  </div>
  <h3>Parametro</h3>
  <div>
    <div class="re" align="center"><a href="home.php?pac=102">Parametro</a>Registre Parametros</a></div>
  </div>
  <h3>Perfil</h3>
  <div>
    <a href="home.php?pac=104">Perfil de Usuario</a>
  </div>
  <h3>Usuarios</h3>
  <div>
    
  </div>
  <h3>Section 4</h3>
  <div>
    
  </div>
  <h3>Salida</h3>
  <div>
    <a href="vista/salir.php">Salir del Sistema</a>
  </div>
  <?php } ?>
</div>


<!--<div class="smallwhitetext" style="padding:9px;">
<ul id="accordion">
    
	<hr width="0%" />
    <?php if($perusu==2){ ?>
    <li><a href="home.php?pac=109">Inicio</a></li>
    <li><a href="home.php?pac=120">Requerimientos</a></li>
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
    <li><a href="home.php?pac=108">Encuestas</a></li>
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
</div>-->