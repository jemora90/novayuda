<?php
	include ("controlador/conexion.php");
//SELECT `nombre`, `nu_de_empleados`, `codigo_area_empre` FROM `area_empresarial` WHERE 1

class marea_empresarial{
	var $arr;
	function marea_empresarial(){}
	

	function insarea_empresarial($nombre,$nu_de_empleados){
		$sql = "INSERT INTO area_empresarial (nombre,nu_de_empleados) VALUES ('".$nombre."','".$nu_de_empleados."');";
		$this->cons($sql);
	}
	
	function delarea_empresarial($codigo_area_empre){
		$sql = "DELETE FROM area_empresarial WHERE codigo_area_empre='".$codigo_area_empre."';";
		$this->cons($sql);
	}
	
	function updarea_empresarial($codigo_area_empre , $nombre , $nu_de_empleados){
		$sql = "UPDATE area_empresarial SET codigo_area_empre='".$codigo_area_empre."', 
				nombre='".$nombre."',nu_de_empleados='".$nu_de_empleados."' 
				WHERE codigo_area_empre='".$codigo_area_empre."';";
				$this->cons($sql);
		
	}
	function cons($c){
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$conexionBD->ejeCon($c,1);
	}	
	
	function selarea_empresarial(){
		$sql = "SELECT codigo_area_empre, nombre, nu_de_empleados FROM area_empresarial;";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
	
	function selarea_empresarial1($codigo_area_empre){
		$sql = "SELECT codigo_area_empre, nombre, nu_de_empleados FROM area_empresarial WHERE codigo_area_empre='".$codigo_area_empre."';";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
	
	
	}
?>
