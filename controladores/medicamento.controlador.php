<?php

class ControladorMedicamento{

	/*=============================================
	MOSTRAR MEDICAMENTO
	=============================================*/

	static public function ctrMostrarEstaca($item, $valor, $orden){

		$tabla = "estaca";

		$respuesta = ModeloEstaca::mdlMostrarEstaca($tabla, $item, $valor, $orden);

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
	BORRAR Estaca
	=============================================*/
	static public function ctrEliminarEstaca(){

		if(isset($_GET["idEstaca"])){

			$tabla ="estaca";
			$datos = $_GET["idEstaca"];


			$respuesta = ModeloEstaca::mdlEliminarEstaca($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "La Estaca ha sido borrada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "estacas";

								}
							})

				</script>';

			}		
		}


	}



}