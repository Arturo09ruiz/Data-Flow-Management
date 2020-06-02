
<?php

require_once "conexion.php";

class ModeloMiembrosPdtEstaca{




	static public function mdlMostrarMiembrosConformeEstaca($tabla, $item, $valor, $orden, $estaca){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE `idestaca` = $estaca");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE `idestaca` = $estaca");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}



	
	
	


}