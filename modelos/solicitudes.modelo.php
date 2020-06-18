<?php

require_once "conexion.php";

class ModeloSolicitudes{

	

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
	




	static public function mdlDesaprobacionGerente($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo) VALUES (:codigo)");

		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
	

        
        

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}




















	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

	// static public function mdlMostrarProductos($tabla, $item, $valor, $orden){

	// 	if($item != null){

	// 		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id DESC");

	// 		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

	// 		$stmt -> execute();

	// 		return $stmt -> fetch();

	// 	}else{

	// 		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $orden DESC");

	// 		$stmt -> execute();

	// 		return $stmt -> fetchAll();

	// 	}

	// 	$stmt -> close();

	// 	$stmt = null;

	// }


	


	static public function mdlMostrarSolicitudesConformeBarrioObispo($tabla, $item, $valor, $orden, $barrio){

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



	
	static public function mdlMostrarSolicitudesConformeEstaca($tabla, $item, $valor, $orden, $estaca){

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

	

	static public function ctrMostrarSolicitudesConformePais($tabla, $item, $valor, $orden, $pais){

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

	static public function mdlMostrarSolicitudesConformeConsejo($tabla, $item, $valor, $orden, $consejo){

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





	static public function ctrMostrarSolicitudesConformeBarrioObispoID($tabla, $item, $valor, $orden, $barrio){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = $valor");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = $valor");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}


	/*=============================================
	REGISTRO DE PRODUCTO
	=============================================*/
	static public function mdlIngresarSolicitudes($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo, ncm_miembro, nombre_miembro, edad, email, telefono, idbarrio, idestaca, idconsejo, idpais, enfermedad, medicamento, dosis_recetada, duracion, necesidad, Plan_Autosuficiencia_1, Plan_Autosuficiencia_2, Informe_Medico, Recipe_Medico, CI) VALUES (:codigo, :ncm_miembro, :nombre_miembro, :edad, :email, :telefono, :idbarrio, :idestaca, :idconsejo, :idpais, :enfermedad, :medicamento, :dosis_recetada, :duracion, :necesidad, :Plan_Autosuficiencia_1, :Plan_Autosuficiencia_2, :Informe_Medico, :Recipe_Medico, :CI)");

		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":ncm_miembro", $datos["ncm_miembro"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre_miembro", $datos["nombre_miembro"], PDO::PARAM_STR);
		$stmt->bindParam(":edad", $datos["edad"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":idbarrio", $datos["idbarrio"], PDO::PARAM_STR);
		$stmt->bindParam(":idestaca", $datos["idestaca"], PDO::PARAM_STR);
		$stmt->bindParam(":idconsejo", $datos["idconsejo"], PDO::PARAM_STR);
		$stmt->bindParam(":idpais", $datos["idpais"], PDO::PARAM_STR);
		$stmt->bindParam(":enfermedad", $datos["enfermedad"], PDO::PARAM_STR);
        $stmt->bindParam(":medicamento", $datos["medicamento"], PDO::PARAM_STR);
		$stmt->bindParam(":dosis_recetada", $datos["dosis_recetada"], PDO::PARAM_STR);
		$stmt->bindParam(":duracion", $datos["duracion"], PDO::PARAM_STR);
		$stmt->bindParam(":necesidad", $datos["necesidad"], PDO::PARAM_STR);
		$stmt->bindParam(":Plan_Autosuficiencia_1", $datos["Plan_Autosuficiencia_1"], PDO::PARAM_STR);
		$stmt->bindParam(":Plan_Autosuficiencia_2", $datos["Plan_Autosuficiencia_2"], PDO::PARAM_STR);
		$stmt->bindParam(":Informe_Medico", $datos["Informe_Medico"], PDO::PARAM_STR);
		$stmt->bindParam(":Recipe_Medico", $datos["Recipe_Medico"], PDO::PARAM_STR);
		$stmt->bindParam(":CI", $datos["CI"], PDO::PARAM_STR);


        
        
        

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	static public function mdlIngresarSolicitudesGerente($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo, ncm_miembro, nombre_miembro, edad, email, telefono, idbarrio, idestaca, idconsejo, idpais, enfermedad, medicamento, dosis_recetada, duracion, necesidad, pa1, pa2, im, rm, ci,aprobacion_gerente, comentarios_gerente,aprobacion_asesor, comentarios_asesor, aprobacion_finanzas, comentarios_finanzas,fecha_solicitud) VALUES (:codigo, :ncm_miembro, :nombre_miembro, :edad, :email, :telefono, :idbarrio, :idestaca, :idconsejo, :idpais, :enfermedad, :medicamento, :dosis_recetada, :duracion, :necesidad, :pa1, :pa2, :im, :rm, :ci, :aprobacion_gerente, :comentarios_gerente,:aprobacion_asesor, :comentarios_asesor, :aprobacion_finanzas, :comentarios_finanzas, :fecha_solicitud)");

		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":ncm_miembro", $datos["ncm_miembro"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre_miembro", $datos["nombre_miembro"], PDO::PARAM_STR);
		$stmt->bindParam(":edad", $datos["edad"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":idbarrio", $datos["idbarrio"], PDO::PARAM_STR);
		$stmt->bindParam(":idestaca", $datos["idestaca"], PDO::PARAM_STR);
		$stmt->bindParam(":idconsejo", $datos["idconsejo"], PDO::PARAM_STR);
		$stmt->bindParam(":idpais", $datos["idpais"], PDO::PARAM_STR);
		$stmt->bindParam(":enfermedad", $datos["enfermedad"], PDO::PARAM_STR);
        $stmt->bindParam(":medicamento", $datos["medicamento"], PDO::PARAM_STR);
		$stmt->bindParam(":dosis_recetada", $datos["dosis_recetada"], PDO::PARAM_STR);
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







	static public function mdlGuardarEstadoGerente($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET aprobacion_gerente = :aprobacion_gerente, comentarios_gerente = :comentarios_gerente WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
		$stmt->bindParam(":aprobacion_gerente", $datos["aprobacion_gerente"], PDO::PARAM_STR);
		$stmt->bindParam(":comentarios_gerente", $datos["comentarios_gerente"], PDO::PARAM_STR);
	
        
        

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	
	static public function mdlGuardarEstadoAsesor($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET aprobacion_asesor = :aprobacion_asesor, comentarios_asesor = :comentarios_asesor WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
		$stmt->bindParam(":aprobacion_asesor", $datos["aprobacion_asesor"], PDO::PARAM_STR);
		$stmt->bindParam(":comentarios_asesor", $datos["comentarios_asesor"], PDO::PARAM_STR);
	
        
        

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	static public function mdlGuardarEstadoFinanzas($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET aprobacion_finanzas = :aprobacion_finanzas, comentarios_finanzas = :comentarios_finanzas WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
		$stmt->bindParam(":aprobacion_finanzas", $datos["aprobacion_finanzas"], PDO::PARAM_STR);
		$stmt->bindParam(":comentarios_finanzas", $datos["comentarios_finanzas"], PDO::PARAM_STR);
	
        
        

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	EDITAR PRODUCTO
	=============================================*/
	static public function mdlEditarProducto($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET id_categoria = :id_categoria, descripcion = :descripcion, imagen = :imagen, stock = :stock, precio_compra = :precio_compra, precio_venta = :precio_venta WHERE codigo = :codigo");

		$stmt->bindParam(":id_categoria", $datos["id_categoria"], PDO::PARAM_INT);
		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
		$stmt->bindParam(":stock", $datos["stock"], PDO::PARAM_STR);
		$stmt->bindParam(":precio_compra", $datos["precio_compra"], PDO::PARAM_STR);
		$stmt->bindParam(":precio_venta", $datos["precio_venta"], PDO::PARAM_STR);

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

	static public function mdlEliminarSolicitudes($tabla, $datos){

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

	// static public function mdlActualizarProducto($tabla, $item1, $valor1, $valor){

	// 	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE id = :id");

	// 	$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
	// 	$stmt -> bindParam(":id", $valor, PDO::PARAM_STR);

	// 	if($stmt -> execute()){

	// 		return "ok";
		
	// 	}else{

	// 		return "error";	

	// 	}

	// 	$stmt -> close();

	// 	$stmt = null;

	// }

	/*=============================================
	MOSTRAR SUMA VENTAS
	=============================================*/	

	// static public function mdlMostrarSumaVentas($tabla){

	// 	$stmt = Conexion::conectar()->prepare("SELECT SUM(ventas) as total FROM $tabla");

	// 	$stmt -> execute();

	// 	return $stmt -> fetch();

	// 	$stmt -> close();

	// 	$stmt = null;
	// }


}