<?php

class ControladorPais{

	/*=============================================
	MOSTRAR PAISES
	=============================================*/

	static public function ctrMostrarPais($item, $valor, $orden){

		$tabla = "pais";

		$respuesta = ModeloPais::mdlMostrarPais($tabla, $item, $valor, $orden);

		return $respuesta;

	}

	/*=============================================
	CREAR Pais 
	=============================================*/

	static public function ctrCrearPais(){

		if(isset($_POST["nuevaNombre"])){

				$tabla = "pais";

				$datos = array(
							   "codigo" => $_POST["nuevoCodigo"],
							   "nombre" => $_POST["nuevaNombre"]);

				$respuesta = ModeloPais::mdlIngresarPais($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "El Pais ha sido guardado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "paises-del-area";

										}
									})

						</script>';

				}


			}

	}


	/*=============================================
	BORRAR PAIS
	=============================================*/
	static public function ctrEliminarPais(){

		if(isset($_GET["idPais"])){

			$tabla ="pais";
			$datos = $_GET["idPais"];

		
			$respuesta = ModeloPais::mdlEliminarPais($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El Pais ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "paises-del-area";

								}
							})

				</script>';

			}		
		}


    }}

