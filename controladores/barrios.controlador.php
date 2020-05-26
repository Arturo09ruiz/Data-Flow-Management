<?php

class ControladorBarrios{

	/*=============================================
	MOSTRAR Barrios
	=============================================*/

	static public function ctrMostrarBarrios($item, $valor, $orden){

		$tabla = "barrios";

		$respuesta = ModeloBarrios::mdlMostrarBarrios($tabla, $item, $valor, $orden);

		return $respuesta;

	}

	/*=============================================
	CREAR Barrios 
	=============================================*/

	static public function ctrCrearBarrios(){

		if(isset($_POST["nuevaNombre"])){


				$tabla = "barrios";

				$datos = array(
							   "codigo" => $_POST["nuevoCodigo"],
                               "nombre" => $_POST["nuevaNombre"],
                               "idestaca" => $_POST["nuevaEstaca"],
                               "idconsejo" => $_POST["nuevaConsejo"],
                               "idpais" => $_POST["nuevaPais"]);

				$respuesta = ModeloBarrios::mdlIngresarBarrios($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "El Barrio ha sido guardado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "barrios";

										}
									})

						</script>';

				}


			}
		}

	/*=============================================
	BORRAR Barrios
	=============================================*/
	static public function ctrEliminarBarrios(){

		if(isset($_GET["idBarrios"])){

			$tabla ="barrios";
			$datos = $_GET["idBarrios"];

		

			$respuesta = ModeloBarrios::mdlEliminarBarrios($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El Barrio ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "barrios";

								}
							})

				</script>';

			}		
		}


	}
}