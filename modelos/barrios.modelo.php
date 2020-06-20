<?php

require_once "conexion.php";

class ModeloBarrios{

	/*=============================================
	MOSTRAR Barrios
	=============================================*/

	static public function mdlMostrarBarrios($tabla, $item, $valor, $orden){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id DESC");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $orden DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	static public function mdlMostrarBarriosPrueba($tabla, $item, $valor, $orden, $barrio){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE `id` = $barrio");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE `id` = $barrio");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	REGISTRO DE Barrios
	=============================================*/
	static public function mdlIngresarBarrios($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo, nombre, idestaca, idconsejo, idpais) VALUES (:codigo, :nombre, :idestaca, :idconsejo, :idpais)");

        $stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":idestaca", $datos["idestaca"], PDO::PARAM_STR);
        $stmt->bindParam(":idconsejo", $datos["idconsejo"], PDO::PARAM_STR);
		$stmt->bindParam(":idpais", $datos["idpais"], PDO::PARAM_STR);
        
        
        
        

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}


	/*=============================================
	BORRAR Barrios
	=============================================*/

	static public function mdlEliminarBarrios($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}


	static public function mdlEditarBarriosPrueba($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET solicitudes_medicinas_recibidas = :solicitudes_medicinas_recibidas WHERE id = :id");


		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);

		$stmt->bindParam(":solicitudes_medicinas_recibidas", $datos["solicitudes_medicinas_recibidas"], PDO::PARAM_STR);
	

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}
}