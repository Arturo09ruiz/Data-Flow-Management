<?php

class ControladorEntregados{

	
	/*=============================================
	CREAR PRODUCTO 
	=============================================*/
	
	static public function ctrCrearEntregado(){

	


		if(isset($_POST["ncm"])){

			$item = null;
			$valor = null;
			$orden = "id";
			$ncm = $_POST["ncm"];
			$tabla = "miembros";
			
		$miembros = ModeloMiembrosGerente::mdlMostrarMiembros($tabla, $item, $valor, $orden, $ncm);
	
		// 	// $id = $miembros["id"];
		// 	// $numero = $miembros["solicitudes_medicinas_recibidas"];
	
		// 	// $numerofinal = $numero + 1;
	
	

	 $array = json_encode($miembros);


	 foreach ($miembros as $key => $value) {


		$id = $value["id"];

		  $recibidas = $value["solicitudes_medicinas_recibidas"];
		  $total = $recibidas + 1; 

		  
	
	}

					$tabla = "miembros";


					$datos = array("id"=>$id,
				   "solicitudes_medicinas_recibidas"=>$total);

				   $respuesta = ModeloMiembros::mdlEditarMiembrosPrueba($tabla, $datos);

	
				$tabla = "entregados";

				$datos = array("codigo" => $_POST["nuevoCodigo"],
                               "ncm" => $_POST["ncm"],
                               "nombre" => $_POST["nombre"],
                               "edad" => $_POST["edad"],
                               "email" => $_POST["email"],
                               "telefono" => $_POST["telefono"],
                               "idbarrio" => $_POST["idbarrio"],
                               "idestaca" => $_POST["idestaca"],
                               "idconsejo" => $_POST["idconsejo"],
                               "idpais" => $_POST["idpais"],
                               "enfermedad" => $_POST["nuevaEnfermedad"],
                               "medicamento" => $_POST["nuevaMedicamento"],
                               "dosis_recetada" => $_POST["nuevaDosis"],
                               "duracion" => $_POST["nuevaDuracion"],
                               "necesidad" => $_POST["nuevaNecesidad"],
                               "pa1" => $_POST["pa1"],
                               "pa2" => $_POST["pa2"],
                               "im" => $_POST["im"],
                               "rm" => $_POST["rm"],
                               "ci" => $_POST["ci"],
                               "aprobacion_gerente" => $_POST["aprobacion_gerente"],
                               "comentarios_gerente" => $_POST["comentarios_gerente"],
                               "aprobacion_asesor" => $_POST["aprobacion_asesor"],
                               "comentarios_asesor" => $_POST["comentarios_asesor"],
                               "aprobacion_finanzas" => $_POST["aprobacion_finanzas"],
                               "comentarios_finanzas" => $_POST["comentarios_finanzas"],
                               "fecha_solicitud" => $_POST["fecha_solicitud"]  
							);

				$respuesta = ModeloEntregrados::mdlIngresarEntregrados($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "El pedido ha Sido Entregado Correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "entregados";

										}
									})

						</script>';

				}


			}

	}


    static public function ctrMostrarSolicitudesEntregadosGerente($item, $valor, $orden, $consejo)
	{

		$tabla = "entregados";

		$respuesta = ModeloEntregrados::mdlMostrarSolicitudesEntregadosGerente($tabla, $item, $valor, $orden, $consejo);

		return $respuesta;

	}

	static public function ctrMostrarSolicitudesEntregados($item, $valor, $orden)
	{

		$tabla = "entregados";

		$respuesta = ModeloEntregrados::mdlMostrarSolicitudesEntregados($tabla, $item, $valor, $orden);

		return $respuesta;
	}



}