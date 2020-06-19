<?php

require_once "../controladores/entregados.controlador.php";
require_once "../modelos/entregados.modelo.php";

require_once "../controladores/barrios.controlador.php";
require_once "../modelos/barrios.modelo.php";


require_once "../controladores/estaca.controlador.php";
require_once "../modelos/estaca.modelo.php";


class TablaSolicitudesEntregadasGerente{

 	/*=============================================
 	 MOSTRAR LA TABLA DE SOLICITUDES
  	=============================================*/ 

	public function mostrarTablaSolicitudesEntregadasGerente(){

		$item = null;
    	$valor = null;
		$orden = "id";
        $consejo = $_GET["consejo"];

  		$entregar = ControladorEntregados::ctrMostrarSolicitudesEntregadosGerente($item, $valor, $orden, $consejo);	

  		if(count($entregar) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($entregar); $i++){

		 
		
            $item = "id";
            $orden = "id";
            $valor = $entregar[$i]["idbarrio"];

            $barrios = ControladorBarrios::ctrMostrarBarrios($item, $valor, $orden);

			$botones =  "<div class='btn-group'><button class='btn btn-info btnVisualizarSolicitudesGerente' idSolicitudes='".$entregar[$i]["id"]."' '><i class='fa fa-eye'></i></button></div>"; 
 



			$te =  "<div class='btn-group'></div>"; 

            $item = "id";
            $orden = "id";
            $valor = $entregar[$i]["idestaca"];

            $estaca = ControladorEstaca::ctrMostrarEstaca($item, $valor, $orden);




            if($entregar[$i]["necesidad"] == "Normal"){
            	$ne = "<button class='btn btn-success btn-block'>Normal</button>";
            }else if($entregar[$i]["necesidad"] == "Urgente"){
                $ne = "<button class='btn btn-warning btn-block'>Urgente</button>";
            }else if($entregar[$i]["necesidad"] == "Emergencia"){
                $ne = "<button class='btn btn-block btn-danger'>Emergencia</button>";
            }








  		
		 
		  	$datosJson .='[
			      "'.($i+1).'",
				  "'.$entregar[$i]["codigo"].'",
				  "'.$ne.'",
                  "'.$barrios["nombre"].'",
                  "'.$estaca["nombre"].'",
				  "'.$entregar[$i]["fecha_solicitud"].'",
				  "'.$entregar[$i]["fecha"].'",
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
$activarSolicitudesEntregadasGerente = new TablaSolicitudesEntregadasGerente();
$activarSolicitudesEntregadasGerente -> mostrarTablaSolicitudesEntregadasGerente();

