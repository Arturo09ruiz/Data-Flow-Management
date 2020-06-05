<?php

require_once "conexion.php";

class ModeloSolicitudes{

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

	/*=============================================
	REGISTRO DE PRODUCTO
	=============================================*/
	static public function mdlIngresarSolicitudes($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo, ncm_miembro, nombre_miembro, edad, email, telefono, idbarrio, idestaca, idconsejo, idpais, enfermedad, medicamento, dosis_recetada, duracion, necesidad, Informe_Medico, Recipe_Medico, CI) VALUES (:codigo, :ncm_miembro, :nombre_miembro, :edad, :email, :telefono, :idbarrio, :idestaca, :idconsejo, :idpais, :enfermedad, :medicamento, :dosis_recetada, :duracion, :necesidad, :Informe_Medico, :Recipe_Medico, :CI)");

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

	/*=============================================
	EDITAR PRODUCTO
	=============================================*/
	// static public function mdlEditarProducto($tabla, $datos){

	// 	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET id_categoria = :id_categoria, descripcion = :descripcion, imagen = :imagen, stock = :stock, precio_compra = :precio_compra, precio_venta = :precio_venta WHERE codigo = :codigo");

	// 	$stmt->bindParam(":id_categoria", $datos["id_categoria"], PDO::PARAM_INT);
	// 	$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":stock", $datos["stock"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":precio_compra", $datos["precio_compra"], PDO::PARAM_STR);
	// 	$stmt->bindParam(":precio_venta", $datos["precio_venta"], PDO::PARAM_STR);

	// 	if($stmt->execute()){

	// 		return "ok";

	// 	}else{

	// 		return "error";
		
	// 	}

	// 	$stmt->close();
	// 	$stmt = null;

	// }

	/*=============================================
	BORRAR PRODUCTO
	=============================================*/

	// static public function mdlEliminarProducto($tabla, $datos){

	// 	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

	// 	$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

	// 	if($stmt -> execute()){

	// 		return "ok";
		
	// 	}else{

	// 		return "error";	

	// 	}

	// 	$stmt -> close();

	// 	$stmt = null;

	// }

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