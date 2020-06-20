<?php

require_once "../controladores/entregar.controlador.php";
require_once "../modelos/entregar.modelo.php";

require_once "../controladores/barrios.controlador.php";
require_once "../modelos/barrios.modelo.php";

class TablaSolicitudesEnCaminoEstaca{

 	/*=============================================
 	 MOSTRAR LA TABLA DE SOLICITUDES
  	=============================================*/ 

	public function mostrarTablaSolicitudesEnCaminoEstaca(){

		$item = null;
    	$valor = null;
		$orden = "id";
        $estaca = $_GET["estaca"];

  		$barrio = ControladorEntregar::ctrMostrarSolicitudesEntregarEstaca($item, $valor, $orden, $estaca);	

  		if(count($barrio) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($barrio); $i++){

		 
		
            $item = "id";
            $orden = "id";
            $valor = $barrio[$i]["idbarrio"];

            $barrios = ControladorBarrios::ctrMostrarBarrios($item, $valor, $orden);
		 
			$botones =  "<div class='btn-group'><button class='btn btn-info btnVisualizarSolicitudesencaminoestaca' idSolicitudes='".$barrio[$i]["id"]."' '><i class='fa fa-eye'></i></button></div>"; 








            if($barrio[$i]["necesidad"] == "Normal"){
            	$ne = "<button class='btn btn-success btn-block'>Normal</button>";
            }else if($barrio[$i]["necesidad"] == "Urgente"){
                $ne = "<button class='btn btn-warning btn-block'>Urgente</button>";
            }else if($barrio[$i]["necesidad"] == "Emergencia"){
                $ne = "<button class='btn btn-block btn-danger'>Emergencia</button>";
            }



		
		if($barrio[$i]["aprobacion_gerente"] == 1){
            $gerente = "<button class='btn btn-success btn-block'>Aprobado</button>";
		}else if($barrio[$i]["aprobacion_gerente"] == 2){
            $gerente = "<button class='btn btn-block btn-danger'>Desaprobado</button>";
		}else{
             $gerente="<button class='btn btn-info btn-block' >Aun No Ha Sido Aprobado</button>";
		}

		if($barrio[$i]["aprobacion_asesor"] == 1){
            $asesor = "<button class='btn btn-success btn-block'>Aprobado</button>";
		}else if($barrio[$i]["aprobacion_asesor"] == 2){
            $asesor = "<button class='btn btn-block btn-danger'>Desaprobado</button>";
		}else{
			$asesor="<button class='btn btn-info btn-block' >Aun No Ha Sido Aprobado</button>";
		}





        if($barrio[$i]["aprobacion_finanzas"] == 1){

            $finanzas = "<button class='btn btn-success btn-block'>Aprobado</button>";
            
        }else if($barrio[$i]["aprobacion_finanzas"] == 2){
             $finanzas = "<button class='btn btn-block btn-danger'>Desaprobado</button>";
        }else{
            $finanzas="<button class='btn btn-info btn-block' >Aun No Ha Sido Aprobado</button>";
        }







  		
		 
		  	$datosJson .='[
			      "'.($i+1).'",
                  "'.$barrio[$i]["codigo"].'",
                  "'.$barrio[$i]["ncm"].'",
                  "'.$barrio[$i]["nombre"].'",
                  "'.$barrio[$i]["edad"].'",
                  "'.$barrio[$i]["telefono"].'",
                  "'.$barrios["nombre"].'",
				  "'.$ne.'",                              
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
$activarSolicitudesEnCaminoEstaca = new TablaSolicitudesEnCaminoEstaca();
$activarSolicitudesEnCaminoEstaca -> mostrarTablaSolicitudesEnCaminoEstaca();

