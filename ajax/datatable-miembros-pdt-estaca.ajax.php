<?php

require_once "../controladores/miembros-pdt-estaca.controlador.php";
require_once "../modelos/miembros-pdt-estaca.modelo.php";


require_once "../controladores/barrios.controlador.php";
require_once "../modelos/barrios.modelo.php";

class TablaMiembrosPdtEstaca{

 	/*=============================================
 	 MOSTRAR LA TABLA DE MIEMBROS
  	=============================================*/ 

	public function mostrarTablaMiembrosPdtEstaca(){

		$item = null;
    	$valor = null;
		$orden = "id";
        $estaca = $_GET["estaca"];

  		$miembrosestaca = ControladorMiembrosPdtEstaca::ctrMostrarMiembrosConformeEstaca($item, $valor, $orden, $estaca);	

  		if(count($miembrosestaca) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($miembrosestaca); $i++){

		 
		
            $item = "id";
            $orden = "id";
            $valor = $miembrosestaca[$i]["idbarrio"];

            $barrios = ControladorBarrios::ctrMostrarBarrios($item, $valor, $orden);
		 
		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$miembrosestaca[$i]["ncm"].'",
				  "'.$miembrosestaca[$i]["nombre"].'",
			      "'.$miembrosestaca[$i]["edad"].'",
			      "'.$miembrosestaca[$i]["email"].'",
                  "'.$miembrosestaca[$i]["telefono"].'",
                  "'.$barrios["nombre"].'"
			    ],';

		  }

		  $datosJson = substr($datosJson, 0, -1);

		 $datosJson .=   '] 

		 }';
		
		echo $datosJson;


	}



}

/*=============================================
ACTIVAR TABLA DE MIEMBROS
=============================================*/ 
$activarMiembrosEstaca = new TablaMiembrosPdtEstaca();
$activarMiembrosEstaca -> mostrarTablaMiembrosPdtEstaca();

