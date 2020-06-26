<?php

require_once "../controladores/medicamento.controlador.php";
require_once "../modelos/medicamento.modelo.php";

class TablaMedicamento{

 	/*=============================================
 	 MOSTRAR LA TABLA DE MEDICAMENTOS
  	=============================================*/ 

	public function mostrarTablaMedicamento(){

		$item = null;
    	$valor = null;
    	$orden = "id";

  		$medicamento = ControladorMedicamento::ctrMostrarMedicamento($item, $valor, $orden);	

  		if(count($medicamento) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($medicamento); $i++){



		  	/*=============================================
 	 		TRAEMOS LAS ACCIONES
  			=============================================*/ 

  			if(isset($_GET["perfilOculto"]) && $_GET["perfilOculto"] == "Especial"){

  				$botones =  "<h1>Sin Acceso</h1>"; 

  			}else{

  				 $botones =  "<div class='btn-group'><button class='btn btn-danger btnEliminarMedicamento' idMedicamento='".$medicamento[$i]["id"]."' '><i class='fa fa-times'></i></button></div>"; 

  			}

		 
		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$medicamento[$i]["codigo"].'",
			      "'.$medicamento[$i]["nombre"].'",              
			      "'.$medicamento[$i]["fecha"].'",
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
ACTIVAR TABLA DE MEDICAMENTO
=============================================*/ 
$activarMedicamento = new TablaMedicamento();
$activarMedicamento -> mostrarTablaMedicamento();

