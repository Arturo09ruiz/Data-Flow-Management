<?php

require_once "../controladores/solicitudes.controlador.php";
require_once "../modelos/solicitudes.modelo.php";


class TablaSolicitudesObispo{

 	/*=============================================
 	 MOSTRAR LA TABLA DE SOLICITUDES
  	=============================================*/ 

	public function mostrarTablaSolicitudesObispo(){

		$item = null;
    	$valor = null;
		$orden = "id";
        $barrio = $_GET["barrio"];

  		$solicitudes = ControladorSolicitudes::ctrMostrarSolicitudesConformeBarrioObispo($item, $valor, $orden, $barrio);	

  		if(count($solicitudes) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($solicitudes); $i++){

		 
		
			$botones =  "<div class='btn-group'><button class='btn btn-info btnVisualizarSolicitudes' idSolicitudes='".$solicitudes[$i]["id"]."' '><i class='fa fa-eye'></i></button></div>"; 

  		
		 
		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$solicitudes[$i]["codigo"].'",
				  "'.$solicitudes[$i]["ncm_miembro"].'",
			      "'.$solicitudes[$i]["nombre_miembro"].'",
			      "'.$solicitudes[$i]["edad"].'",
                  "'.$solicitudes[$i]["email"].'",
				  "'.$solicitudes[$i]["telefono"].'",
				  "'.$botones.'"

			    ],';

		  }

		  $datosJson = substr($datosJson, 0, -1);

		 $datosJson .=   '] 

		 }';
		
		echo $datosJson;


	}



}

/*=============================================
ACTIVAR TABLA DE Solicitudes
=============================================*/ 
$activarSolicitudes = new TablaSolicitudesObispo();
$activarSolicitudes -> mostrarTablaSolicitudesObispo();

