<?php

require_once "conexion.php";

class ModeloCabeza{

	/*=============================================
	MOSTRAR Cabezas
	=============================================*/

	static public function mdlMostrarCabeza($tabla, $item, $valor, $orden){

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
	
	

	// MOSTRAR DATOS CONFORME ID DEL OBISPO
    static public function mdlMostrarCabezaBarrio($tabla, $item, $valor, $orden, $idbarrio){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE `idbarrio` = $idbarrio");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE `idbarrio` = $idbarrio");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	REGISTRO DE CABEZAS
	=============================================*/
	static public function mdlIngresarCabeza($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(ncm, nombre, fecha_nacimiento, miembros_de_la_familia, idbarrio, idestaca, idconsejo, idpais) VALUES (:ncm, :nombre, :fecha_nacimiento, :miembros_de_la_familia, :idbarrio, :idestaca, :idconsejo, :idpais)");

		$stmt->bindParam(":ncm", $datos["ncm"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_nacimiento", $datos["fecha_nacimiento"], PDO::PARAM_STR);
		$stmt->bindParam(":miembros_de_la_familia", $datos["miembros_de_la_familia"], PDO::PARAM_STR);
		$stmt->bindParam(":idbarrio", $datos["idbarrio"], PDO::PARAM_STR);
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
	EDITAR Cabeza
	=============================================*/
	static public function mdlEditarCabeza($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET ncm = :ncm, nombre = :nombre, fecha_nacimiento = :fecha_nacimiento, miembros_de_la_familia = :miembros_de_la_familia WHERE id = :id");

		
		// Codigo
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
		$stmt->bindParam(":ncm", $datos["ncm"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_nacimiento", $datos["fecha_nacimiento"], PDO::PARAM_STR);
		$stmt->bindParam(":miembros_de_la_familia", $datos["miembros_de_la_familia"], PDO::PARAM_STR);






		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	BORRAR CABEZA
	=============================================*/

	static public function mdlEliminarCabeza($tabla, $datos){

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

	/*=============================================
	ACTUALIZAR CABEZA
	=============================================*/

	static public function mdlActualizarCabeza($tabla, $item1, $valor1, $valor){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE id = :id");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":id", $valor, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}



}