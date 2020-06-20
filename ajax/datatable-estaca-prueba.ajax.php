<?php

require_once "../controladores/entregados.controlador.php";
require_once "../modelos/entregados.modelo.php";

require_once "../controladores/barrios.controlador.php";
require_once "../modelos/barrios.modelo.php";


class TablaSolicitudesEntregadasEstaca{

 	/*=============================================
 	 MOSTRAR LA TABLA DE SOLICITUDES
  	=============================================*/ 

	public function mostrarTablaSolicitudesEntregadasEstaca(){

		$item = null;
    	$valor = null;
		$orden = "id";
        $estaca = $_GET["estaca"];

  		$barrio = ControladorEntregados::ctrMostrarSolicitudesEntregadosEstaca($item, $valor, $orden, $estaca);	

  		if(count($barrio) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($barrio); $i++){

		 
		
			$botones =  "<div class='btn-group'><button class='btn btn-info btnVisualizarSolicitudesentregadasestaca' idSolicitudes='".$barrio[$i]["id"]."' '><i class='fa fa-eye'></i></button></div>"; 





            $item = "id";
            $orden = "id";
            $valor = $barrio[$i]["idbarrio"];

            $s = ControladorBarrios::ctrMostrarBarrios($item, $valor, $orden);
		 



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
                  "'.$ne.'",                
                  "'.$s["nombre"].'",
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
$activarSolicitudesEntregadasEstaca = new TablaSolicitudesEntregadasEstaca();
$activarSolicitudesEntregadasEstaca -> mostrarTablaSolicitudesEntregadasEstaca();

