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






	static public function ctrCrearDesaprobar()
	{

		if (isset($_POST["nuevoCodigo"])) {


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
				"aprobacion_asesor" => $_POST["aprobacion_a"],
				"comentarios_asesor" => $_POST["comentarios_a"],
				"aprobacion_finanzas" => $_POST["aprobacion_f"],
				"comentarios_finanzas" => $_POST["comentarios_f"],
				"fecha_solicitud" => $_POST["fecha_solicitud"]
			);

			$respuesta = ModeloDesaprobar::mdlDesaprobar($tabla, $datos);

			if ($respuesta == "ok") {

				echo '<script>

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
			} else {

				echo '<script>

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



	static public function ctrMostrarSolicitudesDesaprobadasC($item, $valor, $orden, $consejo)
	{

		$tabla = "desaprobado";

		$respuesta = ModeloDesaprobar::mdlMostrarSolicitudesDesaprobadasC($tabla, $item, $valor, $orden, $consejo);

		return $respuesta;
	}

	static public function ctrMostrarSolicitudesDesaprobadasObispo($item, $valor, $orden, $barrio)
	{

		$tabla = "desaprobado";

		$respuesta = ModeloDesaprobar::mdlMostrarSolicitudesDesaprobadasBarrio($tabla, $item, $valor, $orden, $barrio);

		return $respuesta;
	}

	static public function ctrMostrarSolicitudesDesaprobadasO($item, $valor, $orden, $barrio)
	{

		$tabla = "desaprobado";

		$respuesta = ModeloDesaprobar::mdlMostrarSolicitudesDesaprobadasO($tabla, $item, $valor, $orden, $barrio);

		return $respuesta;
	}

	static public function ctrMostrarSolicitudesDesaprobadasEstaca($item, $valor, $orden, $estaca)
	{

		$tabla = "desaprobado";

		$respuesta = ModeloDesaprobar::mdlMostrarSolicitudesDesaprobadasEstaca($tabla, $item, $valor, $orden, $estaca);

		return $respuesta;
	}


	static public function ctrMostrarSolicitudesDesaprobadasE($item, $valor, $orden, $estaca)
	{

		$tabla = "desaprobado";

		$respuesta = ModeloDesaprobar::mdlMostrarSolicitudesDesaprobadasE($tabla, $item, $valor, $orden, $estaca);

		return $respuesta;
	}













	static public function ctrCrearDesaprobarAsesor()
	{

		if (isset($_POST["nuevoCodigo"])) {


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
				"aprobacion_asesor" => $_POST["aprobacion_a"],
				"comentarios_asesor" => $_POST["comentarios_a"],
				"aprobacion_finanzas" => $_POST["aprobacion_f"],
				"comentarios_finanzas" => $_POST["comentarios_f"],
				"fecha_solicitud" => $_POST["fecha_solicitud"]
			);

			$respuesta = ModeloDesaprobar::mdlDesaprobarA($tabla, $datos);

			if ($respuesta == "ok") {

				echo '<script>

						swal({
							  type: "success",
							  title: "La solicitud Ha Sido Desprobada Correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "solicitud";

										}
									})

						</script>';
			} else {

				echo '<script>

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






	static public function ctrCrearActivar()
	{

		if (isset($_POST["nuevoCodigo"])) {


			$tabla = "solicitudes";

			$datos = array(
				"codigo" => $_POST["nuevoCodigo"],
				"ncm_miembro" => $_POST["ncm"],
				"nombre_miembro" => $_POST["nombre"],
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
				"Plan_Autosuficiencia_1" => $_POST["pa1"],
				"Plan_Autosuficiencia_2" => $_POST["pa2"],
				"Informe_Medico" => $_POST["im"],
				"Recipe_Medico" => $_POST["rm"],
				"CI" => $_POST["ci"]
			);

			$respuesta = ModeloDesaprobar::mdlactivarDenuevo($tabla, $datos);

			if ($respuesta == "ok") {

				echo '<script>

						swal({
							  type: "success",
							  title: "La solicitud Ha Sido Reactivado Correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "solicitud";

										}
									})

						</script>';
			} else {

				echo '<script>

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
}
