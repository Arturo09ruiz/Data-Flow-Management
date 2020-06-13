<?php

require_once "../controladores/solicitudes.controlador.php";
require_once "../modelos/solicitudes.modelo.php";

require_once "../controladores/barrios.controlador.php";
require_once "../modelos/barrios.modelo.php";


class TablaSolicitudesPdtEstaca{

 	/*=============================================
 	 MOSTRAR LA TABLA DE SOLICITUDES
  	=============================================*/ 

	public function mostrarTablaSolicitudesPdtEstaca(){

		$item = null;
    	$valor = null;
		$orden = "id";
        $estaca = $_GET["estaca"];

  		$solicitudes = ControladorSolicitudes::ctrMostrarSolicitudesConformeEstaca($item, $valor, $orden, $estaca);	

  		if(count($solicitudes) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($solicitudes); $i++){

		 
		
            $item = "id";
            $orden = "id";
            $valor = $solicitudes[$i]["idbarrio"];

            $barrios = ControladorBarrios::ctrMostrarBarrios($item, $valor, $orden);

			$botones =  "<div class='btn-group'><button class='btn btn-info btnVisualizarSolicitudesPdtEstaca' idSolicitudes='".$solicitudes[$i]["id"]."' '><i class='fa fa-eye'></i></button></div>"; 

  		
		 
		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$solicitudes[$i]["codigo"].'",
				  "'.$solicitudes[$i]["ncm_miembro"].'",
			      "'.$solicitudes[$i]["nombre_miembro"].'",
			      "'.$solicitudes[$i]["edad"].'",
                  "'.$solicitudes[$i]["telefono"].'",
                  "'.$barrios["nombre"].'",
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
$activarSolicitudesEstaca = new TablaSolicitudesPdtEstaca();
$activarSolicitudesEstaca -> mostrarTablaSolicitudesPdtEstaca();

