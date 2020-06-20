<?php

class ControladorMiembros{

	/*=============================================
	MOSTRAR Miembros
	=============================================*/

	static public function ctrMostrarMiembros($item, $valor, $orden){

		$tabla = "miembros";

		$respuesta = ModeloMiembros::mdlMostrarMiembros($tabla, $item, $valor, $orden);

		return $respuesta;

	}

	static public function ctrMostrarMiembrosConformeBarrioObispo($item, $valor, $orden , $barrio){

		$tabla = "miembros";

		$respuesta = ModeloMiembros::mdlMostrarMiembrosConformeBarrioObispo($tabla, $item, $valor, $orden, $barrio);

		return $respuesta;

	}




	

	/*=============================================
	CREAR Miembro 
	=============================================*/

	static public function ctrCrearMiembros(){

		if(isset($_POST["nuevaNombre"])){

				$tabla = "miembros";

				$datos = array("ncm" => $_POST["nuevoNCM"],
							   "nombre" => $_POST["nuevaNombre"],
							   "edad" => $_POST["nuevaEdad"],
							   "email" => $_POST["nuevoEmail"],
                               "telefono" => $_POST["nuevoTelefono"],
                               "idbarrio" => $_POST["idbarrio"],
							   "idestaca" => $_POST["idestaca"],
							   "idconsejo" => $_POST["idconsejo"],
							   "idpais" => $_POST["idpais"]);

				$respuesta = ModeloMiembros::mdlIngresarMiembros($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "El Miembro ha sido guardado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "miembros";

										}
									})

						</script>';

				}
			
		}

	}

	/*=============================================
	EDITAR Miembros
	=============================================*/

	static public function ctrEditarMiembros(){

		if(isset($_POST["editarNombre"])){

				$tabla = "miembros";

				$datos = array("ncm" => $_POST["editarNCM"],
							   "nombre" => $_POST["editarNombre"],
							   "email" => $_POST["editarEmail"],
							   "telefono" => $_POST["editarTelefono"]);

				$respuesta = ModeloMiembros::mdlEditarMiembros($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "El Miembro ha sido editado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "miembros";

										}
									})

						</script>';

				}


			
		}

	}

	/*=============================================
	BORRAR Miembro
	=============================================*/
	static public function ctrEliminarMiembros(){

		if(isset($_GET["idMiembros"])){

			$tabla ="miembros";
			$datos = $_GET["idMiembros"];

		

			$respuesta = ModeloMiembros::mdlEliminarMiembros($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El Miembro ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "miembros";

								}
							})

				</script>';

			}		
		}


	}



	
	
	public function ctrDescargarReporteGerente(){

		if(isset($_GET["consejo"])){

			$item = null;
			$valor = null;
			$orden = "id";
			$consejo = $_GET["consejo"];
			$tabla = "miembros";

			$gerente = ModeloMiembrosGerente::mdlMostrarMiembrosGerente($tabla, $item, $orden, $valor,$consejo);



			/*=============================================
			CREAMOS EL ARCHIVO DE EXCEL
			=============================================*/

			$Name = 'reporte.xls';

			header('Expires: 0');
			header('Cache-control: private');
			header("Content-type: application/vnd.ms-excel"); // Archivo de Excel
			header("Cache-Control: cache, must-revalidate"); 
			header('Content-Description: File Transfer');
			header('Last-Modified: '.date('D, d M Y H:i:s'));
			header("Pragma: public"); 
			header('Content-Disposition:; filename="'.$Name.'"');
			header("Content-Transfer-Encoding: binary");
		
			$barrio = ControladorBarrios::ctrMostrarBarriosID("id", $item["idbarrio"]);
			$estaca = ControladorEstaca::ctrMostrarEstacaID("id", $item["idestaca"]);


			echo utf8_decode("<table border='0'> 
					<tr> 
					<td style='font-weight:bold; border:1px solid #eee;'>NCM</td> 
					<td style='font-weight:bold; border:1px solid #eee;'>Nombre</td>
					<td style='font-weight:bold; border:1px solid #eee;'>Edad</td>
					<td style='font-weight:bold; border:1px solid #eee;'>Email</td>
					<td style='font-weight:bold; border:1px solid #eee;'>Telf</td>
					<td style='font-weight:bold; border:1px solid #eee;'>SM</td>
					<td style='font-weight:bold; border:1px solid #eee;'>Barrio</td>
					<td style='font-weight:bold; border:1px solid #eee;'>Estaca</td>
					</tr>");

			foreach ($gerente as $row => $item){

				
			 echo utf8_decode("<tr>
			 	  <td style='border:1px solid #eee;'>".$item["ncm"]."</td>
				 <td style='border:1px solid #eee;'>".$item["nombre"]."</td>
				 <td style='border:1px solid #eee;'>".$item["edad"]."</td>
				 <td style='border:1px solid #eee;'>".$item["email"]."</td>
				 <td style='border:1px solid #eee;'>".$item["telefono"]."</td>
				 <td style='border:1px solid #eee;'>".$item["solicitudes_medicinas_recibidas"]."</td>
				 <td style='border:1px solid #eee;'>".$barrio["nombre"]."</td>
				 <td style='border:1px solid #eee;'>".$estaca["nombre"]."</td>

		 		</tr>
				 ");

			}


			echo "</table>";

		}

	}


}