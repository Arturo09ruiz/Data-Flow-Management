<?php

class ControladorDesaprobar
{

 

    // static public function ctrGuardarDesaprobacionGerente()
    // {

    //     if (isset($_POST["cod"])) {

    //         $tabla = "solicitudes-desaprobadas";

    //         $datos = array(
    //             "codigo" => $_POST["cod"],
    //             "ncm" => $_POST["ncm"],
    //             "nombre" => $_POST["nombre"],
    //             "edad" => $_POST["edad"],
    //             "email" => $_POST["email"],
    //             "telefono" => $_POST["telefono"],
    //             "idbarrio" => $_POST["barrioid"],
    //             "idestaca" => $_POST["idestaca"],
    //             "idconsejo" => $_POST["idconsejo"],
    //             "idpais" => $_POST["idpais"],
    //             "enfermedad" => $_POST["enfermedad"],
    //             "medicamento" => $_POST["medicamento"],
    //             "dosis" => $_POST["dosis"],
    //             "duracion" => $_POST["duracion"],
    //             "necesidad" => $_POST["necesidad"],
    //             "pa1" => $_POST["pa1"],
    //             "pa2" => $_POST["pa2"],
    //             "im" => $_POST["im"],
    //             "rm" => $_POST["rm"],
    //             "ci" => $_POST["ci"],
    //             "aprobacion_gerente" => $_POST["aprobacion_g"],
    //             "comentarios_gerente" => $_POST["comentarios_g"],
    //             "fecha_solicitud" => $_POST["fecha_solicitud"]  
    //         );

    //         $respuesta = ModeloSolicitudes::mdlDesaprobacionGerente($tabla, $datos);

    //         if ($respuesta == "ok") {

    //             echo '<script>

	// 					swal({
	// 						  type: "success",
	// 						  title: "La Solicitud ha sido guardada correctamente",
	// 						  showConfirmButton: true,
	// 						  confirmButtonText: "Cerrar"
	// 						  }).then(function(result){
	// 									if (result.value) {

	// 									window.location = "realizar-solicitud";

	// 									}
	// 								})

	// 					</script>';
    //         }else{
    //             echo $respuesta;
    //         }
    //     }
    // }
        

    // static public function ctrGuardarDesaprobacionGerente()
    // {

    //     if (isset($_POST["cod"])) {

    //         $tabla = "solicitudes-desaprobadas";

    //         $datos = array(
    //             "codigo" => $_POST["cod"]
    //         );

    //         $respuesta = ModeloDesaprobar::mdlDesaprobacionGerente($tabla, $datos);

    //         if ($respuesta == "ok") {

    //             echo '<script>

	// 					swal({
	// 						  type: "success",
	// 						  title: "La Solicitud ha sido guardada correctamente",
	// 						  showConfirmButton: true,
	// 						  confirmButtonText: "Cerrar"
	// 						  }).then(function(result){
	// 									if (result.value) {

	// 									window.location = "realizar-solicitud";

	// 									}
	// 								})

	// 					</script>';
    //         }else{
    //             echo $respuesta;
    //         }
    //     }
    // }






	static public function ctrCrearDesaprobar(){

		if(isset($_POST["nuevoCodigo"])){


				$tabla = "desaprobado";

				$datos = array(
							   "codigo" => $_POST["nuevoCodigo"],
							   "ncm" => $_POST["ncm"],
								"nombre" => $_POST["nombre"],
								"edad" => $_POST["edad"],
								"email" => $_POST["email"],
								"telefono" => $_POST["telefono"],
								"idbarrio" => $_POST["barrioid"],
								"idestaca" => $_POST["idestaca"],
								"idconsejo" => $_POST["idconsejo"],
								"idpais" => $_POST["idpais"],
								"enfermedad" => $_POST["enfermedad"],
								"medicamento" => $_POST["medicamento"],
								"dosis" => $_POST["dosis"],
								"duracion" => $_POST["duracion"],
								"necesidad" => $_POST["necesidad"],
								"pa1" => $_POST["pa1"],
								"pa2" => $_POST["pa2"],
								"im" => $_POST["im"],
								"rm" => $_POST["rm"],
								"ci" => $_POST["ci"],
								"aprobacion_gerente" => $_POST["aprobacion_g"],
								"comentarios_gerente" => $_POST["comentarios_g"],
								"fecha_solicitud" => $_POST["fecha_solicitud"]  
							   );

				$respuesta = ModeloDesaprobar::mdlDesaprobar($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "El Pedido Ha Sido Desprobado Correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "desaprobado";

										}
									})

						</script>';

				}


			else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La Desaprobacion no puede ir con los campos vacíos o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "solicitud";

							}
						})

			  	</script>';
			}
		}

	}


	

    
	static public function ctrMostrarSolicitudesDesaprobadasConsejo($item, $valor, $orden, $consejo)
    {

        $tabla = "desaprobado";

        $respuesta = ModeloDesaprobar::mdlMostrarSolicitudesDesaprobadasConsejo($tabla, $item, $valor, $orden, $consejo);

        return $respuesta;
    }



}
