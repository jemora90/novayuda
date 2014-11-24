<?php
	include ("modelo/marea_empresarial.php");
//INSERT INTO `area_empresarial`(`id_area`, `nombre`, `nu_de_empleados`) VALUES ([value-1],[value-2],[value-3])

$ins = new marea_empresarial();

//Eliminar
	$del = isset($_GET["del"]) ? $_GET["del"]:NULL;
	if ($del){
		$ins->delarea_empresarial($del);
	}

$codigo_area_empre = isset($_POST["codigo_area_empre"]) ? $_POST["codigo_area_empre"]:NULL;
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"]:NULL;
$nu_de_empleados = isset($_POST["nu_de_empleados"]) ? $_POST["nu_de_empleados"]:NULL;
$pr = isset($_GET["pr"]) ? $_GET["pr"]:NULL;
$actu = isset($_POST["actu"]) ? $_POST["actu"]:NULL;

if ($nombre&&$nu_de_empleados&&$actu){
		$ins->updarea_empresarial($codigo_area_empre, $nombre,$nu_de_empleados);
	}

//Insertar
	if ($nombre&&$nu_de_empleados&&!$actu){
		$ins->insarea_empresarial($nombre,$nu_de_empleados);
	}
	$date=$ins->selarea_empresarial1($pr);
?>

