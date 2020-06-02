<?php

class ControladorMiembros{

	/*=============================================
	MOSTRAR Miembros
	=============================================*/

	static public function ctrMostrarMiembros($item, $valor, $orden){

		$tabla = "miembros";

		$respuesta = ModeloMiembros::mdlMostrarMiembros($tabla, $item, $valor, $orden);

		return $respuesta;

	}

	/*=============================================
	CREAR Miembro 
	=============================================*/

	static public function ctrCrearMiembros(){

		if(isset($_POST["nuevaNombre"])){

				$tabla = "miembros";

				$datos = array("ncm" => $_POST["nuevoNCM"],
							   "nombre" => $_POST["nuevaNombre"],
							   "email" => $_POST["nuevoEmail"],
                               "telefono" => $_POST["nuevoTelefono"],
                               "idbarrio" => $_POST["idbarrio"],
							   "idestaca" => $_POST["idestaca"],
							   "idconsejo" => $_POST["idconsejo"],
							   "idpais" => $_POST["idpais"]);

				$respuesta = ModeloMiembros::mdlIngresarMiembros($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "El Miembro ha sido guardado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "miembros";

										}
									})

						</script>';

				}
			
		}

	}

	/*=============================================
	EDITAR Miembros
	=============================================*/

	static public function ctrEditarMiembros(){

		if(isset($_POST["editarNombre"])){

				$tabla = "miembros";

				$datos = array("ncm" => $_POST["editarNCM"],
							   "nombre" => $_POST["editarNombre"],
							   "email" => $_POST["editarEmail"],
							   "telefono" => $_POST["editarTelefono"]);

				$respuesta = ModeloMiembros::mdlEditarMiembros($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "El Miembro ha sido editado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "miembros";

										}
									})

						</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El producto no puede ir con los campos vacíos o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "productos";

							}
						})

			  	</script>';
			}
		}

	}

	/*=============================================
	BORRAR PRODUCTO
	=============================================*/
	static public function ctrEliminarProducto(){

		if(isset($_GET["idProducto"])){

			$tabla ="productos";
			$datos = $_GET["idProducto"];

			if($_GET["imagen"] != "" && $_GET["imagen"] != "vistas/img/productos/default/anonymous.png"){

				unlink($_GET["imagen"]);
				rmdir('vistas/img/productos/'.$_GET["codigo"]);

			}

			$respuesta = ModeloProductos::mdlEliminarProducto($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El producto ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "productos";

								}
							})

				</script>';

			}		
		}


	}

	/*=============================================
	MOSTRAR SUMA VENTAS
	=============================================*/

	static public function ctrMostrarSumaVentas(){

		$tabla = "productos";

		$respuesta = ModeloProductos::mdlMostrarSumaVentas($tabla);

		return $respuesta;

	}


}