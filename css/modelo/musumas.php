<?php include ("controlador/conexion.php"); 

class musumas{
	var $arr;
//INSERT INTO `usuario`(`ndocumento`, `nombre`, `apellido`, `email`, `telefono`, `id_perfil`, `password`, `genero`, `area_empre_id`, `tipo_documento`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])
//http://www.youtube.com/watch?v=mPkiVBSY2Js
	function musumas(){}
	function insusu($ndocumento, $nombre, $apellido, $email, 
		$telefono, $id_perfil, $password,$genero,$area_empre_id, 
		$tipo_documento){
		$sql = "INSERT INTO usuario (ndocumento, nombre, apellido, email,
		telefono, id_perfil, password,genero,area_empre_id, 
		tipo_documento) values ('".$ndocumento."','".$nombre."','".$apellido."',
		'".$email."','".$telefono."','".$id_perfil."','".$password."','".$genero."'
		,'".$area_empre_id."','".$tipo_documento."');";
		//echo $sql;
		$this->cons($sql);
	}
	
	function cons($c){
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$conexionBD->ejeCon($c,1);
	}
	function selusu($ndocumento){
		$sql = "SELECT count(ndocumento) as us FROM usuario WHERE ndocumento='".$ndocumento."';";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
//SELECT `codigo_valor`, `nombre_valor`, `codigo_parametro` FROM `valor` WHERE 1
	function selval($nombre_valor){
		$sql = "SELECT codigo_valor, nombre_valor FROM valor WHERE nombre_valor='".$nombre_valor."'";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
	
}
?>

