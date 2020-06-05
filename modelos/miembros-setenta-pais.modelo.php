
<?php

require_once "conexion.php";

class ModeloMiembrosSetentaPais{

	static public function mdlMostrarMiembrosSetentaPais($tabla, $item, $valor, $orden, $pais){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE `idpais` = $pais");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE `idpais` = $pais");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}






}