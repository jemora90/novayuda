<?php
include ("controlador/conexion.php");


class mparametro{
	var $arr;
	function mparametro(){}
	
	function inspar($nombre_parametro){
		$sql = "INSERT INTO parametro (nombre_parametro) VALUES ('".$nombre_parametro."');";
		$this->cons($sql);
	}
	
	function insval($codigo_valor, $nombre_valor, $codigo_parametro){
		$sql = "INSERT INTO valor ( codigo_valor , nombre_valor, codigo_parametro ) values ('".$codigo_valor."', '".$nombre_valor."', '".$codigo_parametro."');";
		$this->cons($sql);
	}
	function delpar($codigo_parametro){
		$sql = "DELETE FROM parametro WHERE codigo_parametro='".$codigo_parametro."';";
		$this->cons($sql);
	}
	
	function delval($codigo_valor){
		$sql = "DELETE FROM valor WHERE codigo_valor='".$codigo_valor."';";
		$this->cons($sql);
	}
	function updpar($codigo_parametro, $nombre_parametro){
		$sql = "UPDATE parametro SET nombre_parametro='".$nombre_parametro."' WHERE codigo_parametro='".$codigo_parametro."';";
		$this->cons($sql);
	}
	function cons($c){
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$conexionBD->ejeCon($c,1);
	}
	
	function selpar(){
		$sql = "SELECT codigo_parametro, nombre_parametro FROM parametro;";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
		function selval(){
		$sql = "SELECT valor.codigo_valor, valor.nombre_valor, valor.codigo_parametro, parametro.nombre_parametro FROM valor, parametro;";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
	function selpar1($codigo_parametro){
		$sql = "SELECT codigo_parametro, nombre_parametro FROM parametro WHERE codigo_parametro='".$codigo_parametro."';";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
		function selval2($codigo_valor){
		$sql = "SELECT codigo_valor, nombre_valor FROM valor WHERE codigo_valor='".$codigo_valor."';";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
		function selval1(){
		$sql = "SELECT valor.codigo_valor, valor.nombre_valor, valor.codigo_parametro, parametro.nombre_parametro FROM valor, parametro WHERE valor.codigo_parametro= parametro.codigo_parametro;";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
		}
		function selpaji($filtro,$rvalini,$rvalfin){
		$sql = "SELECT parametro.nombre_parametro ,valor.codigo_valor, valor.nombre_valor  FROM parametro LEFT JOIN valor ON parametro.codigo_parametro=valor.codigo_parametro";
		if($filtro)
			$sql.= " WHERE valor.nombre_valor LIKE '%".$filtro."%'";
		$sql .= "  ORDER BY valor.codigo_valor LIMIT ".$rvalini.", ".$rvalfin;
		//echo "<br><br>".$sql."<br><br>";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}	
		
	function updval($codigo_valor, $nombre_valor, $codigo_parametro){
		$sql = "UPDATE valor SET codigo_valor='".$codigo_valor."' , nombre_valor='".$nombre_valor."' , codigo_parametro='".$codigo_parametro."' WHERE codigo_valor='".$codigo_valor."';";
		$this->cons($sql);
	}
}
?>