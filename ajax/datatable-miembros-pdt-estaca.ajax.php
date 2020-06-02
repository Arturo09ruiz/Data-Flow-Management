<?php

require_once "../controladores/miembros.controlador.php";
require_once "../modelos/miembros.modelo.php";


class TablaMiembrosPdtEstaca{

 	/*=============================================
 	 MOSTRAR LA TABLA DE MIEMBROS
  	=============================================*/ 

	public function mostrarTablaMiembrosPdtEstaca(){

		$item = null;
    	$valor = null;
		$orden = "id";
        $estaca = $_GET["estaca"];

  		$miembros = ControladorMiembros::ctrMostrarMiembrosConformeEstacaPdt($item, $valor, $orden, $estaca);	

  		if(count($miembros) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($miembros); $i++){

		 
		


		 
		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$miembros[$i]["ncm"].'",
			      "'.$miembros[$i]["nombre"].'",
			      "'.$miembros[$i]["email"].'",
			      "'.$miembros[$i]["telefono"].'",
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
$activarMiembrosPdtEstaca = new TablaMiembrosPdtEstaca();
$activarMiembrosPdtEstaca -> mostrarTablaMiembrosPdtEstaca();

