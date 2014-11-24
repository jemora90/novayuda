<?php include("modelo/mseguridad.php"); 
$perusu = isset($_SESSION["perfil"]) ? $_SESSION["perfil"]:NULL;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="icon" type="image/png" href="image/logo-sena.png" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/red.css" type="text/css" />
        <link rel="stylesheet" href="css/menstyle.css" type="text/css" />
 
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js' type='text/javascript'/></script>
    </head>
    <body>
        <center>
            <div id="contenedor">
                <div id="encabe">
                    <?php
                    include("vista/cabezote.php");
                    ?>
                </div>
                <div id="contenidorc1">
                    <div id="menu">
                        <?php
                        include("vista/menu.php");
                        ?>
                    </div>
                    <div id="contcen" class="bodytext" style="padding:12px;">

                        <?php
                        $Pac = isset($_GET["pac"]) ? $_GET["pac"] : NULL;
                        $Up = isset($_GET["up"]) ? $_GET["up"] : NULL;
                        if (is_null($Pac)) {
							if($perusu==2){
                            include("vista/tomarincidente.php");
							}else if($perusu==3){
                            include("vista/vincidente.php");
							}
                        } else if ($Pac == "101") {
                            include("vista/vregistro.php");
							}  else if ($Pac == "126") {
                            include("vista/vvalor1.php");
                        } else if ($Pac == "102") {
                            if (is_null($Up)) {
                                include("vista/vparametro.php");
                            } else {
                                include("vista/vparametro1.php");
                            }
                        } else if ($Pac == "103") {
                            if (is_null($Up)) {
                                include("vista/varea_emp.php");
                            } else {
                                include("vista/varea_empresarial1.php");
                            }
                        } else if ($Pac == "104") {
                            if (is_null($Up)) {
                                include("vista/vperfil.php");
                            } else {
                                include("vista/vperfil1.php");
                            }
                        }  else if ($Pac == "105") {
                            if (is_null($Up)) {
                                include("vista/vusuariomas.php");
                            } 
                            }else if ($Pac == "106") {
                            if (is_null($Up)) {
                                include("vista/vincidente.php");
                            } 
                            }else if ($Pac == "107") {
                            if (is_null($Up)) {
                                include("vista/tomarincidente.php");
                            } 
                            }
								
                        //}
                        ?>
                    </div>
                </div>
                <div id="piec">
<?php
include("vista/pie.php");
$perusu = isset($_SESSION["perfil"]) ? $_SESSION["perfil"]:NULL;
?>
                 </div>
                <div class='botones-sociales derecha hidden-phone hidden-tablet'>
  <?php if($perusu==1){?>              
<a class='itemsocial' href='home.php?pac=120' id='pinterest-btn'><span class='social'><span class='texto'>Datos del Administrador</span></span></a>
<?php }?>
<a class='itemsocial' href='home.php?pac=123' id='facebook-btn'><span class='social'><span class='texto'>Cambiar Contraseña</span></span></a>
<?php if($perusu==2){ ?>
<a class='itemsocial' href='archivo/MANUAL APRENDIZ.pdf'  target='_blank' id='twitter-btn'><span class='social'><span class='texto'>Ayuda</span></span></a>
<?php }else{ ?>
<a class='itemsocial' href='archivo/MDU_Bienestar.pdf'  target='_blank' id='twitter-btn'><span class='social'><span class='texto'>Ayuda</span></span></a>
<?php } ?>
<a class='itemsocial' href='vista/salir.php' id='rss-btn'><span class='social'><span class='texto'>Salir</span></span></a>
</div>
            </div>
        </center>
           
    </body>
</html>