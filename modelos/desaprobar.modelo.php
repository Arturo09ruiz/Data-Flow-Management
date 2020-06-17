<?php

require_once "conexion.php";

class ModeloDesaprobar{

	// static public function mdlDesaprobacionGerente($tabla, $datos){

	// 	$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo, ncm, nombre, edad, email, telefono, idbarrio, idestaca, idconsejo, idpais, enfermedad, medicamento, dosis, duracion, necesidad, pa1, pa2, im, rm, ci, aprobacion_gerente, comentarios_gerente, fecha_solicitud) VALUES (:codigo, :ncm, :nombre, :edad, :email, :telefono, :idbarrio, :idestaca, :idconsejo, :idpais, :enfermedad, :medicamento, :dosis, :duracion, :necesidad, :pa1, :pa2, :im, :rm, :ci, :aprobacion_gerente, :comentarios_gerente, :fecha_solicitud)");

	// 	$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":ncm", $datos["ncm"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":edad", $datos["edad"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
    //     $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":idbarrio", $datos["idbarrio"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":idestaca", $datos["idestaca"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":idconsejo", $datos["idconsejo"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":idpais", $datos["idpais"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":enfermedad", $datos["enfermedad"], PDO::PARAM_STR);
    //     $stmt->bindParam(":medicamento", $datos["medicamento"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":dosis", $datos["dosis"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":duracion", $datos["duracion"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":necesidad", $datos["necesidad"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":pa1", $datos["pa1"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":pa2", $datos["pa2"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":im", $datos["im"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":rm", $datos["rm"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":ci", $datos["ci"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":aprobacion_gerente", $datos["aprobacion_gerente"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":comentarios_gerente", $datos["comentarios_gerente"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":fecha_solicitud", $datos["fecha_solicitud"], PDO::PARAM_STR);

        

	// 	if($stmt->execute()){

	// 		return "ok";

	// 	}else{

	// 		return "error";
		
	// 	}

	// 	$stmt->close();
	// 	$stmt = null;

	// }
	

	// static public function mdlDesaprobacionGerente($tabla, $datos){

	// 	$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo) VALUES (:codigo)");

	// 	$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
	


	// 	if($stmt->execute()){

	// 		return "ok";

	// 	}else{

	// 		return "error";
		
	// 	}

    //     $stmt->close();
        
	// 	$stmt = null;

	// }
    static public function mdlDesaprobar($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo, ncm, nombre, edad, email, telefono, idbarrio, idestaca, idconsejo, idpais, enfermedad, medicamento, dosis, duracion, necesidad, pa1, pa2, im, rm, ci, aprobacion_gerente, comentarios_gerente,aprobacion_asesor, comentarios_asesor, aprobacion_finanzas, comentarios_finanzas,fecha_solicitud) VALUES (:codigo, :ncm, :nombre, :edad, :email, :telefono, :idbarrio, :idestaca, :idconsejo, :idpais, :enfermedad, :medicamento, :dosis, :duracion, :necesidad, :pa1, :pa2, :im, :rm, :ci, :aprobacion_gerente, :comentarios_gerente,:aprobacion_asesor, :comentarios_asesor, :aprobacion_finanzas, :comentarios_finanzas, :fecha_solicitud)");
		
		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":ncm", $datos["ncm"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":edad", $datos["edad"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":idbarrio", $datos["idbarrio"], PDO::PARAM_STR);
		$stmt->bindParam(":idestaca", $datos["idestaca"], PDO::PARAM_STR);
		$stmt->bindParam(":idconsejo", $datos["idconsejo"], PDO::PARAM_STR);
		$stmt->bindParam(":idpais", $datos["idpais"], PDO::PARAM_STR);
		$stmt->bindParam(":enfermedad", $datos["enfermedad"], PDO::PARAM_STR);
        $stmt->bindParam(":medicamento", $datos["medicamento"], PDO::PARAM_STR);
		$stmt->bindParam(":dosis", $datos["dosis"], PDO::PARAM_STR);
		$stmt->bindParam(":duracion", $datos["duracion"], PDO::PARAM_STR);
		$stmt->bindParam(":necesidad", $datos["necesidad"], PDO::PARAM_STR);
		$stmt->bindParam(":pa1", $datos["pa1"], PDO::PARAM_STR);
		$stmt->bindParam(":pa2", $datos["pa2"], PDO::PARAM_STR);
		$stmt->bindParam(":im", $datos["im"], PDO::PARAM_STR);
		$stmt->bindParam(":rm", $datos["rm"], PDO::PARAM_STR);
		$stmt->bindParam(":ci", $datos["ci"], PDO::PARAM_STR);
		$stmt->bindParam(":aprobacion_gerente", $datos["aprobacion_gerente"], PDO::PARAM_STR);
		$stmt->bindParam(":comentarios_gerente", $datos["comentarios_gerente"], PDO::PARAM_STR);
		$stmt->bindParam(":aprobacion_asesor", $datos["aprobacion_asesor"], PDO::PARAM_STR);
		$stmt->bindParam(":comentarios_asesor", $datos["comentarios_asesor"], PDO::PARAM_STR);
		$stmt->bindParam(":aprobacion_finanzas", $datos["aprobacion_finanzas"], PDO::PARAM_STR);
		$stmt->bindParam(":comentarios_finanzas", $datos["comentarios_finanzas"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_solicitud", $datos["fecha_solicitud"], PDO::PARAM_STR);



		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	static public function mdlDesaprobarA($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo, ncm, nombre, edad, email, telefono, idbarrio, idestaca, idconsejo, idpais, enfermedad, medicamento, dosis, duracion, necesidad, pa1, pa2, im, rm, ci, aprobacion_gerente, comentarios_gerente,aprobacion_asesor, comentarios_asesor, aprobacion_finanzas, comentarios_finanzas,fecha_solicitud) VALUES (:codigo, :ncm, :nombre, :edad, :email, :telefono, :idbarrio, :idestaca, :idconsejo, :idpais, :enfermedad, :medicamento, :dosis, :duracion, :necesidad, :pa1, :pa2, :im, :rm, :ci, :aprobacion_gerente, :comentarios_gerente,:aprobacion_asesor, :comentarios_asesor, :aprobacion_finanzas, :comentarios_finanzas, :fecha_solicitud)");

		
		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":ncm", $datos["ncm"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":edad", $datos["edad"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":idbarrio", $datos["idbarrio"], PDO::PARAM_STR);
		$stmt->bindParam(":idestaca", $datos["idestaca"], PDO::PARAM_STR);
		$stmt->bindParam(":idconsejo", $datos["idconsejo"], PDO::PARAM_STR);
		$stmt->bindParam(":idpais", $datos["idpais"], PDO::PARAM_STR);
		$stmt->bindParam(":enfermedad", $datos["enfermedad"], PDO::PARAM_STR);
        $stmt->bindParam(":medicamento", $datos["medicamento"], PDO::PARAM_STR);
		$stmt->bindParam(":dosis", $datos["dosis"], PDO::PARAM_STR);
		$stmt->bindParam(":duracion", $datos["duracion"], PDO::PARAM_STR);
		$stmt->bindParam(":necesidad", $datos["necesidad"], PDO::PARAM_STR);
		$stmt->bindParam(":pa1", $datos["pa1"], PDO::PARAM_STR);
		$stmt->bindParam(":pa2", $datos["pa2"], PDO::PARAM_STR);
		$stmt->bindParam(":im", $datos["im"], PDO::PARAM_STR);
		$stmt->bindParam(":rm", $datos["rm"], PDO::PARAM_STR);
		$stmt->bindParam(":ci", $datos["ci"], PDO::PARAM_STR);
		$stmt->bindParam(":aprobacion_gerente", $datos["aprobacion_gerente"], PDO::PARAM_STR);
		$stmt->bindParam(":comentarios_gerente", $datos["comentarios_gerente"], PDO::PARAM_STR);
		$stmt->bindParam(":aprobacion_asesor", $datos["aprobacion_asesor"], PDO::PARAM_STR);
		$stmt->bindParam(":comentarios_asesor", $datos["comentarios_asesor"], PDO::PARAM_STR);
		$stmt->bindParam(":aprobacion_finanzas", $datos["aprobacion_finanzas"], PDO::PARAM_STR);
		$stmt->bindParam(":comentarios_finanzas", $datos["comentarios_finanzas"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_solicitud", $datos["fecha_solicitud"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}




	static public function mdlMostrarSolicitudesDesaprobadasConsejo($tabla, $item, $valor, $orden, $consejo){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE `idconsejo` = $consejo");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE `idconsejo` = $consejo");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	static public function mdlMostrarSolicitudesDesaprobadasC($tabla, $item, $valor, $orden, $consejo){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE `id` = $valor");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE `id` = $valor");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	static public function mdlMostrarSolicitudesDesaprobadasBarrio($tabla, $item, $valor, $orden, $barrio){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE `idbarrio` = $barrio");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE `idbarrio` = $barrio");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}


	static public function mdlMostrarSolicitudesDesaprobadasO($tabla, $item, $valor, $orden, $barrio){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE `id` = $valor");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE `id` = $valor");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}


	static public function mdlMostrarSolicitudesDesaprobadasEstaca($tabla, $item, $valor, $orden, $estaca){

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

	static public function mdlMostrarSolicitudesDesaprobadasE($tabla, $item, $valor, $orden, $estaca){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE `id` = $valor");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE `id` = $valor");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}



}