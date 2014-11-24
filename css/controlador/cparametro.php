<?php
	include ("modelo/mparametro.php");
	include ("modelo/mpagina.php");
	
	$ins = new mparametro();
	
	$pac=102;
	$ed = isset($_GET["ed"]) ? $_GET["ed"]:NULL;
	$pr = isset($_GET["pr"]) ? $_GET["pr"]:NULL;
	$prr = isset($_GET["prr"]) ? $_GET["prr"]:NULL;
	$filtro=isset($_GET["filtro"]) ? $_GET["filtro"]:NULL;
	$codpar = isset($_POST["codigo_pararametro"]) ? $_POST["codigo_pararametro"]:NULL;
	$nompar = isset($_POST["nombre_parametro"]) ? $_POST["nombre_parametro"]:NULL;
	$codval = isset($_POST["codigo_valor"]) ? $_POST["codigo_valor"]:NULL;
	$nomval = isset($_POST["nombre_valor"]) ? $_POST["nombre_valor"]:NULL;
	$actu = isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	
	//Eliminar
	$del = isset($_GET["del"]) ? $_GET["del"]:NULL;
	if ($del){
		$ins->delpar($del);
	}
	
	$del2 = isset($_GET["del2"]) ? $_GET["del2"]:NULL;
	if ($del2){
		$ins->delval($del2);
	}
	
	
	$dat5 = $ins->selpar1($pr);
	$dat3 = $ins->selpar1($prr);
	$dat4 = $ins->selval2($pr);
	
	//Actualizar
	if ($nombre_parametro && $actu){
		$ins->updpar($codigo_parametro,$nombre_parametro);
	}
	
	//Insertar
	if ($nombre_parametro  && !$actu){
		$ins->inspar($nombre_parametro);
	}
	
	//Actualizar Valor
	if($codigo_valor && $nombre_valor && $codigo_parametro && $actu){
		$ins->updval($codigo_valor, $nombre_valor, $codigo_parametro);
	}
	
	//Insertar Valor
	if ($nombre_valor && $codigo_parametro && !$actu){
		$ins->insval($codigo_valor, $nombre_valor, $codigo_parametro);
	}
	//Paginar
	$bo = "";
	$nreg = 10;//numero de registros a mostrar
	$pag = new mpagina($nreg);
	$conp ="SELECT count(parametro.codigo_parametro) as Npe FROM parametro INNER JOIN valor ON valor.codigo_parametro= parametro.codigo_parametro";
	if($filtro) $conp.= " WHERE parametro.nombre_parametro LIKE '%".$filtro."%'";
	
	//$dat5=$ins->selpaji();
?>