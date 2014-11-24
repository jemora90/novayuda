<?php
include ("modelo/mincidente.php");

$ins = new mincidente();
$dat1 = $ins->selcategoria();

$prioridad_id = isset($_POST["prioridad_id"]) ? $_POST["prioridad_id"]:NULL;
$descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"]:NULL;
$calificacion_id = isset($_POST["calificacion_id"]) ? $_POST["calificacion_id"]:NULL;
$categoria_id = isset($_POST["categoria_id"]) ? $_POST["categoria_id"]:NULL;
$estado_id = isset($_POST["estado_id"]) ? $_POST["estado_id"]:NULL;
$fecha_creacion = isset($_POST["fecha_creacion"]) ? $_POST["fecha_creacion"]:NULL;
$fecha_vencimiento = isset($_POST["fecha_vencimiento"]) ? $_POST["fecha_vencimiento"]:NULL;

//SELECT `id_incidente`, `prioridad_id`, `descripcion`, `calificacion_id`, `categoria_id`, `estado_id`, `fecha_creacion`, `fecha_vencimiento`, `usuario_id`, `responsable` FROM `incidente` WHERE 1
//Insertar
	if ($prioridad_id&&$descripcion&&$calificacion_id&&$categoria_id
		&&$estado_id&&$fecha_creacion&&$fecha_vencimiento){
		
		$ins->insincidente($prioridad_id,$descripcion,$calificacion_id,
							$categoria_id,$estado_id,$fecha_creacion,
							$fecha_vencimiento);
	}
	

?>
