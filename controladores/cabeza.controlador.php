<?php

class ControladorCabeza{

	/*=============================================
	MOSTRAR CABEZAS DE FAMILIA
	=============================================*/

	static public function ctrMostrarCabeza($item, $valor, $orden){

		$tabla = "cabeza";

		$respuesta = ModeloCabeza::mdlMostrarCabeza($tabla, $item, $valor, $orden);

		return $respuesta;

	}


    static public function ctrMostrarCabezaBarrio($item, $valor, $orden ,$barrio){

		$tabla = "cabeza";

		$respuesta = ModeloCabeza::mdlMostrarCabezaBarrio($tabla, $item, $valor, $orden, $barrio);

		return $respuesta;

	}
	/*=============================================
	CREAR PRODUCTO 
	=============================================*/

	static public function ctrCrearCabeza(){

		if(isset($_POST["nuevaNombre"])){

		
				$tabla = "cabeza";

				$datos = array(
                               "ncm" => $_POST["nuevoNCM"],
							   "nombre" => $_POST["nuevaNombre"],
                               "fecha_nacimiento" => $_POST["nuevaFechaNacimiento"],
                               "miembros_de_la_familia" => $_POST["nuevaMiembros"],
                               "idbarrio" => $_POST["idbarrio"],
							   "idestaca" => $_POST["idestaca"],
							   "idconsejo" => $_POST["idconsejo"],
							   "idpais" => $_POST["idpais"]);

				$respuesta = ModeloCabeza::mdlIngresarCabeza($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "La Cabeza de Familia ha sido guardada correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "cabezas-de-familia";

										}
									})

						</script>';

				}


			}
        }
		

	

	/*=============================================
	EDITAR CABEZA
	=============================================*/

	static public function ctrEditarCabeza(){

		if(isset($_POST["editarNombre"])){

			
		   		

				$tabla = "cabezas";

				$datos = array("id_categoria" => $_POST["editarCategoria"],
							   "codigo" => $_POST["editarCodigo"],
							   "descripcion" => $_POST["editarDescripcion"],
							   "stock" => $_POST["editarStock"],
							   "precio_compra" => $_POST["editarPrecioCompra"],
							   "precio_venta" => $_POST["editarPrecioVenta"],
							  );

				$respuesta = ModeloCabeza::mdlEditarCabeza($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "La Cabeza de Familia Ha Sido editada Correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "cabezas-de-familia";

										}
									})

						</script>';

				}


			}
		}

	

	/*=============================================
	BORRAR CABEZA
	=============================================*/
	static public function ctrEliminarCabeza(){

		if(isset($_GET["idCabeza"])){

			$tabla ="cabeza";
			$datos = $_GET["idCabeza"];

		

			$respuesta = ModeloCabeza::mdlEliminarCabeza($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "La Cabeza de Familia ha sido borrada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "cabezas-de-familia";

								}
							})

				</script>';

			}		
		}


	}

	


}