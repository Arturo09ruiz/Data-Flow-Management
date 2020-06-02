<?php

require_once "../controladores/miembros-gerente.controlador.php";
require_once "../modelos/miembros-gerente.modelo.php";


require_once "../controladores/barrios.controlador.php";
require_once "../modelos/barrios.modelo.php";


require_once "../controladores/estaca.controlador.php";
require_once "../modelos/estaca.modelo.php";

class TablaMiembrosGerente{

 	/*=============================================
 	 MOSTRAR LA TABLA DE MIEMBROS
  	=============================================*/ 

	public function mostrarTablaMiembrosGerente(){

		$item = null;
    	$valor = null;
		$orden = "id";
        $consejo = $_GET["consejo"];

  		$miembrosconsejo = ControladorMiembrosGerente::ctrMostrarMiembrosGerente($item, $valor, $orden, $consejo);	

  		if(count($miembrosconsejo) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($miembrosconsejo); $i++){

		 
		
            $item = "id";
            $orden = "id";
            $valor = $miembrosconsejo[$i]["idbarrio"];

            $barrios = ControladorBarrios::ctrMostrarBarrios($item, $valor, $orden);
         




            $item = "id";
            $orden = "id";
            $valor = $miembrosconsejo[$i]["idestaca"];

            $estacas = ControladorEstaca::ctrMostrarEstaca($item, $valor, $orden);
		 




            

		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$miembrosconsejo[$i]["ncm"].'",
			      "'.$miembrosconsejo[$i]["nombre"].'",
			      "'.$miembrosconsejo[$i]["email"].'",
                  "'.$miembrosconsejo[$i]["telefono"].'",
                  "'.$barrios["nombre"].'",
                  "'.$estacas["nombre"].'"
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
$activarMiembrosConsejo = new TablaMiembrosGerente();
$activarMiembrosConsejo -> mostrarTablaMiembrosGerente();

