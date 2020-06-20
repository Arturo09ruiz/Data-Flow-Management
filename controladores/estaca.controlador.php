<?php

class ControladorEstaca{

	/*=============================================
	MOSTRAR Estaca
	=============================================*/

	static public function ctrMostrarEstaca($item, $valor, $orden){

		$tabla = "estaca";

		$respuesta = ModeloEstaca::mdlMostrarEstaca($tabla, $item, $valor, $orden);

		return $respuesta;

	}
	static public function ctrMostrarEstacaGerente($item, $valor, $orden, $consejo){

		$tabla = "estaca";

		$respuesta = ModeloEstaca::mdlMostrarEstacaGerente($tabla, $item, $valor, $orden, $consejo);

		return $respuesta;

	}

	static public function ctrMostrarEstacaID($item){

		$tabla = "estaca";

		$respuesta = ModeloEstaca::mdlMostrarEstacaID($tabla, $item);

		return $respuesta;

	}

	/*=============================================
	CREAR Estaca 
	=============================================*/

	static public function ctrCrearEstaca(){

		if(isset($_POST["nuevaNombre"])){

				$tabla = "estaca";

				$datos = array("codigo" => $_POST["nuevoCodigo"],
                               "nombre" => $_POST["nuevaNombre"],
                               "idconsejo" => $_POST["nuevaConsejo"],
                               "idpais" => $_POST["nuevaPais"]
                            );

				$respuesta = ModeloEstaca::mdlIngresarEstaca($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "La Estaca ha sido guardada correctamente",
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