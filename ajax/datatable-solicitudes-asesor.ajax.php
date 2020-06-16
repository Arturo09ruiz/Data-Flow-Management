<?php

require_once "../controladores/solicitudes.controlador.php";
require_once "../modelos/solicitudes.modelo.php";

require_once "../controladores/barrios.controlador.php";
require_once "../modelos/barrios.modelo.php";


require_once "../controladores/estaca.controlador.php";
require_once "../modelos/estaca.modelo.php";


class TablaSolicitudesAsesor{

 	/*=============================================
 	 MOSTRAR LA TABLA DE SOLICITUDES
  	=============================================*/ 

	public function mostrarTablaSolicitudesAsesor(){

		$item = null;
    	$valor = null;
		$orden = "id";
        $consejo = $_GET["consejo"];

  		$solicitudes = ControladorSolicitudes::ctrMostrarSolicitudesConformeConsejo($item, $valor, $orden, $consejo);	

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

			$botones =  "<div class='btn-group'><button class='btn btn-info btnVisualizarSolicitudesAsesor' idSolicitudes='".$solicitudes[$i]["id"]."' '><i class='fa fa-eye'></i></button></div>"; 





            $item = "id";
            $orden = "id";
            $valor = $solicitudes[$i]["idestaca"];

            $estaca = ControladorEstaca::ctrMostrarEstaca($item, $valor, $orden);


if($solicitudes[$i]["necesidad"] == "Normal"){
	$ne = "<button class='btn btn-success btn-block'>Normal</button>";
}else if($solicitudes[$i]["necesidad"] == "Urgente"){
	$ne = "<button class='btn btn-warning btn-block'>Urgente</button>";
}else if($solicitudes[$i]["necesidad"] == "Emergencia"){
	$ne = "<button class='btn btn-block btn-danger'>Emergencia</button>";

}
        




  		
		 
		  	$datosJson .='[
			      "'.($i+1).'",
				  "'.$solicitudes[$i]["codigo"].'",
				  "'.$ne.'",
                  "'.$barrios["nombre"].'",
                  "'.$estaca["nombre"].'",
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
$activarSolicitudesAsesor = new TablaSolicitudesAsesor();
$activarSolicitudesAsesor -> mostrarTablaSolicitudesAsesor();

