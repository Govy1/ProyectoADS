<?php
include_once("conexion.php");

class herramienta{
	
	public function getAllHerramienta(){
        conexion::getConexion();
		$consulta = "SELECT * FROM herramienta WHERE estado = 1";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
    }

	public function getHerramienta($busqueda){
        conexion::getConexion();
		$consulta = "SELECT * FROM herramienta WHERE nombre LIKE '$busqueda%'";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
    }

	public function getHerramientaById($id){
        conexion::getConexion();
		$consulta = "SELECT * FROM herramienta WHERE idherramienta = $id";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
	}

	public function actualizarHerramienta($herramienta){
		conexion::getConexion();
		$consulta = "UPDATE `herramienta`
					 SET nombre = '".$herramienta['nombre']."', cantidad = ".$herramienta['cantidad'].", detalle = '".$herramienta['detalle']."'
					 WHERE 
					 	idherramienta = ".$herramienta['id'];
		mysql_query($consulta);	
	}
	
	public function crearHerramienta($herramienta){
		conexion::getConexion();
		$consulta = "INSERT INTO `herramienta`(`idherramienta`, `nombre`, `cantidad`, `estado`, `detalle`)
					 VALUES (NULL, '".$herramienta['nombre']."', '".$herramienta['cantidad']."', 1, '".$herramienta['detalle']."')";
		mysql_query($consulta);
	}

	public function getHerramientaAgotada(){
		conexion::getConexion();
		$consulta = "SELECT * FROM herramienta WHERE cantidad = 0";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
	}

	public function eliminarHerramienta($idHerramienta){
		conexion::getConexion();
		$consulta = "UPDATE `herramienta`
					 SET estado = 0
					 WHERE 
						 idherramienta = ".$idHerramienta;
		mysql_query($consulta);	
	}

	public function actualizarStockHerramienta($idHerramienta, $cantidad){
		conexion::getConexion();
		$consulta = "UPDATE `herramienta`
					 SET cantidad = cantidad - $cantidad
					 WHERE 
						 idherramienta = ".$idHerramienta;
		mysql_query($consulta);
	}
}
?>