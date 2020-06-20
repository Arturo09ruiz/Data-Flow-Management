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





//incrementar solicitudes barrio
	
	$item = null;
	$valor = null;
	$orden = "id";
	$barrio = $_POST["idbarrio"];
	$tabla = "barrios";

	$barrios = ModeloBarrios::mdlMostrarBarriosPrueba($tabla, $item,$orden, $valor, $barrio);


	$arraybarrios = json_encode($barrios);


	foreach ($barrios as $key => $value) {


	   $idbarrio = $value["id"];

		 $recibidasbarrio = $value["solicitudes_medicinas_recibidas"];
		 $totalbarrio = $recibidasbarrio + 1; 	

   }


   $tabla = "barrios";


   $datos = array("id"=>$idbarrio,
  "solicitudes_medicinas_recibidas"=>$totalbarrio);

  $respuesta = ModeloBarrios::mdlEditarBarriosPrueba($tabla, $datos);
//incrementar solicitudes estaca

$item = null;
$valor = null;
$orden = "id";
$estaca = $_POST["idestaca"];
$tabla = "estaca";

$estaca = ModeloEstaca::mdlMostrarEstacaPrueba($tabla, $item,$orden, $valor, $estaca);


$arrayestaca = json_encode($estaca);


foreach ($estaca as $key => $value) {


   $idestaca = $value["id"];
	 $recibidasestaca = $value["solicitudes_medicinas_recibidas"];
	 $totalestaca = $recibidasestaca + 1; 	
}


$tabla = "estaca";


$datos = array("id"=>$idestaca,
"solicitudes_medicinas_recibidas"=>$totalestaca);

$respuesta = ModeloEstaca::mdlEditarEstacaPrueba($tabla, $datos);

//incrementar consejo
$item = null;
$valor = null;
$orden = "id";
$consejo = $_POST["idconsejo"];
$tabla = "consejo";

$consejo = ModeloConsejo::mdlMostrarConsejoPrueba($tabla, $item,$orden, $valor, $consejo);


$arrayconsejo = json_encode($consejo);


foreach ($consejo as $key => $value) {


   $idconsejo = $value["id"];
	 $recibidasconsejo = $value["solicitudes_medicinas_recibidas"];
	 $totalconsejo = $recibidasconsejo + 1; 	
}


$tabla = "consejo";


$datos = array("id"=>$idconsejo,
"solicitudes_medicinas_recibidas"=>$totalconsejo);

$respuesta = ModeloConsejo::mdlEditarConsejoPrueba($tabla, $datos);
//incrementar pais

$item = null;
$valor = null;
$orden = "id";
$pais = $_POST["idpais"];
$tabla = "pais";

$pais = ModeloPais::mdlMostrarPaisPrueba($tabla, $item,$orden, $valor, $pais);


$arraypais = json_encode($pais);


foreach ($pais as $key => $value) {


   $idpais = $value["id"];
	 $recibidaspais = $value["solicitudes_medicinas_recibidas"];
	 $totalpais = $recibidaspais + 1; 	
}


$tabla = "pais";


$datos = array("id"=>$idpais,
"solicitudes_medicinas_recibidas"=>$totalpais);

$respuesta = ModeloPais::mdlEditarPaisPrueba($tabla, $datos);





	
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