<?php

class ControladorConsejo{

	/*=============================================
	MOSTRAR CONSEJOS
	=============================================*/

	static public function ctrMostrarConsejo($item, $valor, $orden){

		$tabla = "consejo";

		$respuesta = ModeloConsejo::mdlMostrarConsejo($tabla, $item, $valor, $orden);

		return $respuesta;

	}

	/*=============================================
	CREAR Consejo 
	=============================================*/

	static public function ctrCrearConsejo(){

		if(isset($_POST["nuevaNombre"])){


				$tabla = "consejo";

				$datos = array("codigo" => $_POST["nuevoCodigo"],
                               "nombre" => $_POST["nuevaNombre"],
							   "id_pais" => $_POST["nuevaPais"],
							);

				$respuesta = ModeloConsejo::mdlIngresarConsejo($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "El Consejo de Coordinacion ha sido guardado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "consejos-de-coordinacion";

										}
									})

						</script>';

				}


			}
		}

	
	/*=============================================
	BORRAR CONSEJO
	=============================================*/
	static public function ctrEliminarConsejo(){

		if(isset($_GET["idConsejo"])){

			$tabla ="consejo";
			$datos = $_GET["idConsejo"];

			$respuesta = ModeloConsejo::mdlEliminarConsejo($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El Consejo de Coordinacion ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "consejos-de-coordinacion";

								}
							})

				</script>';

			}		
		}


    }
}

