<?php
include ("controlador/conexion.php");

//SELECT `id_incidente`, `prioridad_id`, `descripcion`, `calificacion_id`, `categoria_id`, `estado_id`, `fecha_creacion`, `fecha_vencimiento`, `usuario_id`, `responsable` FROM `incidente` WHERE 1

class mincidente{
	var $arr;
	
	function mincidente(){}
	
	function insincidente($prioridad_id,$descripcion,$calificacion_id,
	$categoria_id,$estado_id,$fecha_creacion,$fecha_vencimiento){
		$sql = "INSERT INTO incidente (prioridad_id,descripcion,
		calificacion_id,categoria_id,estado_id,fecha_creacion,
		fecha_vencimiento,usuario_id) values ('".$prioridad_id."','".$descripcion."',
		'".$calificacion_id."','".$categoria_id."','".$estado_id."',
		'".$fecha_creacion."','".$fecha_vencimiento."','".$_SESSION["documento"]."');";
		$this->cons($sql);
	}
	function cons($c){
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$conexionBD->ejeCon($c,1);
	}
//SELECT `id_categoria`, `nomcategoria` FROM `categoria` WHERE 1

	function selcategoria(){
		$sql = "SELECT id_categoria, nomcategoria FROM categoria ;";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
//SELECT `id_incidente`, `prioridad_id`, `descripcion`, `calificacion_id`, `categoria_id`, `estado_id`, `fecha_creacion`, `fecha_vencimiento`, `usuario_id` FROM `incidente` WHERE 1

//SELECT `codigo_valor`, `nombre_valor`, `codigo_parametro` FROM `valor` WHERE 1

//SELECT `id_categoria`, `nomcategoria` FROM `categoria` WHERE 1

//SELECT `ndocumento`, `nombre`, `apellido`, `email`, `telefono`, `id_perfil`, `password`, `genero`, `area_empre_id`, `tipo_documento` FROM `usuario` WHERE 1
	
	function selin(){
			$sql ="SELECT id_incidente, prioridad_id, descripcion, calificacion_id, 
			categoria_id, estado_id, fecha_creacion, fecha_vencimiento, usuario_id FROM incidente;";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$data = $conexionBD->ejeCon($sql,0);
			return $data;
			
		}
	
	function selinc(){
			$sql ="SELECT incidente.id_incidente,incidente.fecha_creacion,incidente.usuario_id,categoria.nomcategoria 	
					as categoria, valor.nombre_valor as valor  FROM incidente, categoria, valor 
					WHERE incidente.categoria_id= categoria.id_categoria AND incidente.estado_id=valor.codigo_valor;";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$data = $conexionBD->ejeCon($sql,0);
			return $data;
			
		}
	}
?>
