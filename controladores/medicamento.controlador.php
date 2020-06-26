<?php

class ControladorMedicamento{

	/*=============================================
	MOSTRAR MEDICAMENTO
	=============================================*/

	static public function ctrMostrarMedicamento($item, $valor, $orden){

		$tabla = "medicamento";

		$respuesta = ModeloMedicamento::mdlMostrarMedicamento($tabla, $item, $valor, $orden);

		return $respuesta;

	}


	/*=============================================
	CREAR MEDICAMENTO 
	=============================================*/

	static public function ctrCrearMedicamento(){

		if(isset($_POST["nuevaNombre"])){

				$tabla = "medicamento";

				$datos = array("codigo" => $_POST["nuevoCodigo"],
                               "nombre" => $_POST["nuevaNombre"]
                                );

				$respuesta = ModeloMedicamento::mdlIngresarMedicamento($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "El Medicamento ha sido guardado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "medicamento";

										}
									})

						</script>';

				}


			}
		}

	


	/*=============================================
	BORRAR MEDICAMENTO
	=============================================*/
	static public function ctrEliminarMedicamento(){

		if(isset($_GET["idMedicamento"])){

			$tabla ="medicamento";
			$datos = $_GET["idMedicamento"];


			$respuesta = ModeloMedicamento::mdlEliminarMedicamento($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El Medicamento ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "medicamento";

								}
							})

				</script>';

			}		
		}


	}



}