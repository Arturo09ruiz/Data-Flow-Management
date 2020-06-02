<?php

require_once "conexion.php";

class ModeloMiembros{

	/*=============================================
	MOSTRAR Miembros
	=============================================*/

	static public function mdlMostrarMiembros($tabla, $item, $valor, $orden){

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

	/*=============================================
	REGISTRO DE Miembros
	=============================================*/
	static public function mdlIngresarMiembros($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(ncm, nombre, email, telefono, idbarrio, idestaca, idconsejo, idpais) VALUES (:ncm, :nombre, :email, :telefono, :idbarrio, :idestaca, :idconsejo, :idpais)");

        $stmt->bindParam(":ncm", $datos["ncm"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_INT);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
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
	EDITAR Miembros
	=============================================*/
	static public function mdlEditarMiembros($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, email = :email, telefono = :telefono WHERE ncm = :ncm");

		$stmt->bindParam(":ncm", $datos["ncm"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	BORRAR PRODUCTO
	=============================================*/

	static public function mdlEliminarProducto($tabla, $datos){

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
	ACTUALIZAR PRODUCTO
	=============================================*/

	static public function mdlActualizarProducto($tabla, $item1, $valor1, $valor){

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

	/*=============================================
	MOSTRAR SUMA VENTAS
	=============================================*/	

	static public function mdlMostrarSumaVentas($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT SUM(ventas) as total FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;
	}


}