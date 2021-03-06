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

			$botones =  "<div class='btn-group'><button class='btn btn-info btnVisualizarSolicitudesGerente' idSolicitudes='".$desaprobadas[$i]["id"]."' '><i class='fa fa-eye'></i></button><button class='btn btn-success btnActivarSolicitud' idSolicitudes='".$desaprobadas[$i]["id"]."' ' codigo='".$desaprobadas[$i]["codigo"]."' '  ncm='".$desaprobadas[$i]["ncm"]."' ' nombre='".$desaprobadas[$i]["nombre"]."' edad='".$desaprobadas[$i]["edad"]."' email='".$desaprobadas[$i]["email"]."' telefono='".$desaprobadas[$i]["telefono"]."' idbarrio='".$desaprobadas[$i]["idbarrio"]."' idestaca='".$desaprobadas[$i]["idestaca"]."' idconsejo='".$desaprobadas[$i]["idconsejo"]."' idpais='".$desaprobadas[$i]["idpais"]."' enfermedad='".$desaprobadas[$i]["enfermedad"]."'medicamento='".$desaprobadas[$i]["medicamento"]."'dosis='".$desaprobadas[$i]["dosis"]."'duracion='".$desaprobadas[$i]["duracion"]."'necesidad='".$desaprobadas[$i]["necesidad"]."' pa1='".$desaprobadas[$i]["pa1"]."'pa2='".$desaprobadas[$i]["pa2"]."'im='".$desaprobadas[$i]["im"]."'rm='".$desaprobadas[$i]["rm"]."'ci='".$desaprobadas[$i]["ci"]."'><i class='fa fa-check'></i></button> </div>"; 




			$te =  "<div class='btn-group'></div>"; 

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

