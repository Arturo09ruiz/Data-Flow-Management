<?php

class ControladorEntregar{

	
	/*=============================================
	CREAR PRODUCTO 
	=============================================*/

	static public function ctrCrearEntregar(){

		if(isset($_POST["ncm"])){
	
				$tabla = "entregar";

				$datos = array("codigo" => $_POST["codigo"],
                               "ncm" => $_POST["ncm"],
                               "nombre" => $_POST["nombre"],
                               "edad" => $_POST["edad"],
                               "email" => $_POST["email"],
                               "telefono" => $_POST["telefono"],
                               "idbarrio" => $_POST["idbarrio"],
                               "idestaca" => $_POST["idestaca"],
                               "idconsejo" => $_POST["idconsejo"],
                               "idpais" => $_POST["idpais"],
                               "enfermedad" => $_POST["enfermedad"],
                               "medicamento" => $_POST["medicamento"],
                               "dosis_recetada" => $_POST["dosis"],
                               "duracion" => $_POST["duracion"],
                               "necesidad" => $_POST["necesidad"],
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

				$respuesta = ModeloEntregar::mdlIngresarEntregar($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "Los Cambios han Sido Guardados Correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "entregar";

										}
									})

						</script>';

				}


			}

	}

}