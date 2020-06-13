<?php

require_once "../controladores/solicitudes.controlador.php";
require_once "../modelos/solicitudes.modelo.php";

require_once "../controladores/barrios.controlador.php";
require_once "../modelos/barrios.modelo.php";


require_once "../controladores/estaca.controlador.php";
require_once "../modelos/estaca.modelo.php";


class TablaSolicitudesGerente{

 	/*=============================================
 	 MOSTRAR LA TABLA DE SOLICITUDES
  	=============================================*/ 

	public function mostrarTablaSolicitudesGerente(){

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

			$botones =  "<div class='btn-group'><button class='btn btn-info btnVisualizarSolicitudesGerente' idSolicitudes='".$solicitudes[$i]["id"]."' '><i class='fa fa-eye'></i></button></div>"; 





            $item = "id";
            $orden = "id";
            $valor = $solicitudes[$i]["idestaca"];

            $estaca = ControladorEstaca::ctrMostrarEstaca($item, $valor, $orden);




        

        if($solicitudes[$i]["aprobacion_asesor"] == 1){

            $medico = "<button class='btn btn-success btn-block'>Aprobado</button>";
            
        }else if($solicitudes[$i]["aprobacion_asesor"] == 2){
             $medico = "<button class='btn btn-block btn-danger'>Desaprobado</button>";
        }else{
            $medico="<button class='btn btn-info btn-block' >Aun No Ha Sido Aprobado</button>";
        }


        if($solicitudes[$i]["aprobacion_finanzas"] == 1){

            $finanzas = "<button class='btn btn-success btn-block'>Aprobado</button>";
            
        }else if($solicitudes[$i]["aprobacion_finanzas"] == 2){
             $finanzas = "<button class='btn btn-block btn-danger'>Desaprobado</button>";
        }else{
            $finanzas="<button class='btn btn-info btn-block' >Aun No Ha Sido Aprobado</button>";
        }







  		
		 
		  	$datosJson .='[
			      "'.($i+1).'",
                  "'.$solicitudes[$i]["codigo"].'",
				  "'.$medico.'",
			      "'.$finanzas.'",
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
$activarSolicitudesGerente = new TablaSolicitudesGerente();
$activarSolicitudesGerente -> mostrarTablaSolicitudesGerente();

