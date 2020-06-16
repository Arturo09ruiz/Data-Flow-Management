<?php

require_once "../controladores/desaprobar.controlador.php";
require_once "../modelos/desaprobar.modelo.php";

require_once "../controladores/barrios.controlador.php";
require_once "../modelos/barrios.modelo.php";


require_once "../controladores/estaca.controlador.php";
require_once "../modelos/estaca.modelo.php";


class TablaSolicitudesDesaprobadasGerente{

 	/*=============================================
 	 MOSTRAR LA TABLA DE SOLICITUDES
  	=============================================*/ 

	public function mostrarTablaSolicitudesDesaprobadasGerente(){

		$item = null;
    	$valor = null;
		$orden = "id";
        $consejo = $_GET["consejo"];

  		$desaprobadas = ControladorDesaprobar::ctrMostrarSolicitudesDesaprobadasConsejo($item, $valor, $orden, $consejo);	

  		if(count($desaprobadas) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($desaprobadas); $i++){

		 
		
            $item = "id";
            $orden = "id";
            $valor = $desaprobadas[$i]["idbarrio"];

            $barrios = ControladorBarrios::ctrMostrarBarrios($item, $valor, $orden);

			$botones =  "<div class='btn-group'><button class='btn btn-info btnVisualizarSolicitudesGerente' idSolicitudes='".$desaprobadas[$i]["id"]."' '><i class='fa fa-eye'></i></button></div>"; 





            $item = "id";
            $orden = "id";
            $valor = $desaprobadas[$i]["idestaca"];

            $estaca = ControladorEstaca::ctrMostrarEstaca($item, $valor, $orden);




            if($desaprobadas[$i]["necesidad"] == "Normal"){
            	$ne = "<button class='btn btn-success btn-block'>Normal</button>";
            }else if($desaprobadas[$i]["necesidad"] == "Urgente"){
                $ne = "<button class='btn btn-warning btn-block'>Urgente</button>";
            }else if($desaprobadas[$i]["necesidad"] == "Emergencia"){
                $ne = "<button class='btn btn-block btn-danger'>Emergencia</button>";
            }



		
		if($desaprobadas[$i]["aprobacion_gerente"] == 1){
            $gerente = "<button class='btn btn-success btn-block'>Aprobado</button>";
		}else if($desaprobadas[$i]["aprobacion_gerente"] == 2){
            $gerente = "<button class='btn btn-block btn-danger'>Desaprobado</button>";
		}else{
             $gerente="<button class='btn btn-info btn-block' >Aun No Ha Sido Aprobado</button>";
		}

		if($desaprobadas[$i]["aprobacion_asesor"] == 1){
            $asesor = "<button class='btn btn-success btn-block'>Aprobado</button>";
		}else if($desaprobadas[$i]["aprobacion_asesor"] == 2){
            $asesor = "<button class='btn btn-block btn-danger'>Desaprobado</button>";
		}else{
			$asesor="<button class='btn btn-info btn-block' >Aun No Ha Sido Aprobado</button>";
		}





        if($desaprobadas[$i]["aprobacion_finanzas"] == 1){

            $finanzas = "<button class='btn btn-success btn-block'>Aprobado</button>";
            
        }else if($desaprobadas[$i]["aprobacion_finanzas"] == 2){
             $finanzas = "<button class='btn btn-block btn-danger'>Desaprobado</button>";
        }else{
            $finanzas="<button class='btn btn-info btn-block' >Aun No Ha Sido Aprobado</button>";
        }







  		
		 
		  	$datosJson .='[
			      "'.($i+1).'",
				  "'.$desaprobadas[$i]["codigo"].'",
				  "'.$ne.'",
				  "'.$gerente.'",
				  "'.$asesor.'",
				  "'.$finanzas.'",
                  "'.$barrios["nombre"].'",
				  "'.$estaca["nombre"].'",
				  "'.$desaprobadas[$i]["fecha"].'",
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
$activarSolicitudesDesaprobadasGerente = new TablaSolicitudesDesaprobadasGerente();
$activarSolicitudesDesaprobadasGerente -> mostrarTablaSolicitudesDesaprobadasGerente();

