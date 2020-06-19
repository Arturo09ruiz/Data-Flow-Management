<?php

require_once "../controladores/entregar.controlador.php";
require_once "../modelos/entregar.modelo.php";

require_once "../controladores/barrios.controlador.php";
require_once "../modelos/barrios.modelo.php";


require_once "../controladores/estaca.controlador.php";
require_once "../modelos/estaca.modelo.php";


class TablaSolicitudesPorEntregarGerente{

 	/*=============================================
 	 MOSTRAR LA TABLA DE SOLICITUDES
  	=============================================*/ 

	public function mostrarTablaSolicitudesPorEntregarGerente(){

		$item = null;
    	$valor = null;
		$orden = "id";
        $consejo = $_GET["consejo"];

  		$entregar = ControladorEntregar::ctrMostrarSolicitudesPorEntregarGerente($item, $valor, $orden, $consejo);	

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

			$botones =  "<div class='btn-group'><button class='btn btn-info btnVisualizarSolicitudesGerente' idSolicitudes='".$entregar[$i]["id"]."' '><i class='fa fa-eye'></i></button><button class='btn btn-success btnEntregarSolicitud' idSolicitudes='".$entregar[$i]["id"]."' ' codigo='".$entregar[$i]["codigo"]."' '  ncm='".$entregar[$i]["ncm"]."' ' nombre='".$entregar[$i]["nombre"]."' edad='".$entregar[$i]["edad"]."' email='".$entregar[$i]["email"]."' telefono='".$entregar[$i]["telefono"]."' idbarrio='".$entregar[$i]["idbarrio"]."' idestaca='".$entregar[$i]["idestaca"]."' idconsejo='".$entregar[$i]["idconsejo"]."' idpais='".$entregar[$i]["idpais"]."' enfermedad='".$entregar[$i]["enfermedad"]."'medicamento='".$entregar[$i]["medicamento"]."'dosis_recetada='".$entregar[$i]["dosis_recetada"]."'duracion='".$entregar[$i]["duracion"]."'necesidad='".$entregar[$i]["necesidad"]."' pa1='".$entregar[$i]["pa1"]."'pa2='".$entregar[$i]["pa2"]."'im='".$entregar[$i]["im"]."'rm='".$entregar[$i]["rm"]."'ci='".$entregar[$i]["ci"]."'aprobacion_gerente='".$entregar[$i]["aprobacion_gerente"]."'comentarios_gerente='".$entregar[$i]["comentarios_gerente"]."'aprobacion_asesor='".$entregar[$i]["aprobacion_asesor"]."'comentarios_asesor='".$entregar[$i]["comentarios_asesor"]."'aprobacion_finanzas='".$entregar[$i]["aprobacion_finanzas"]."'comentarios_finanzas='".$entregar[$i]["comentarios_finanzas"]."'fecha_solicitud='".$entregar[$i]["fecha_solicitud"]."'><i class='fa fa-check'></i></button> </div>"; 
 



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
$activarSolicitudesPorEntregarGerente = new TablaSolicitudesPorEntregarGerente();
$activarSolicitudesPorEntregarGerente -> mostrarTablaSolicitudesPorEntregarGerente();

