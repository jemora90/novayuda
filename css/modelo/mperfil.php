<link rel="stylesheet" href="css/style.css" type="text/css" />
<?php
include ("controlador/conexion.php");
class mperfil{
	var $arr;
	function mperfil(){}
	
	function insper($nombre){
		$sql = "INSERT INTO perfil (nombre) VALUES ('".$nombre."');";
		$this->cons($sql);
	}
	function delper($id_perfil){
		$sql = "DELETE FROM perfil WHERE id_perfil='".$id_perfil."';";
		$this->cons($sql);
	}
	function updper($id_perfil, $nombre){
		$sql = "UPDATE perfil SET nombre='".$nombre."' WHERE id_perfil='".$id_perfil."';";
		$this->cons($sql);
	}
	function cons($c){
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$conexionBD->ejeCon($c,1);
	}
	function selper(){
		$sql = "SELECT id_perfil, nombre FROM perfil;";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
	function selper1($id_perfil){
		$sql = "SELECT id_perfil, nombre FROM perfil WHERE id_perfil='".$id_perfil."';";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
}
?>