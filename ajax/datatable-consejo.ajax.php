<?php

require_once "../controladores/consejo.controlador.php";
require_once "../modelos/consejo.modelo.php";

require_once "../controladores/pais.controlador.php";
require_once "../modelos/pais.modelo.php";


class TablaConsejo{

 	/*=============================================
 	 MOSTRAR LA TABLA DE Consejo
  	=============================================*/ 

	public function mostrarTablaConsejo(){

		$item = null;
    	$valor = null;
    	$orden = "id";

  		$consejo = ControladorConsejo::ctrMostrarConsejo($item, $valor, $orden);	

  		if(count($consejo) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($consejo); $i++){

		  	/*=============================================
 	 		TRAEMOS EL PAIS
  			=============================================*/ 

		  	$item = "id";
		  	$valor = $consejo[$i]["id_pais"];
			$orden = "id";

		  	$pais = ControladorPais::ctrMostrarPais($item, $valor, $orden);

		  
		  	/*=============================================
 	 		TRAEMOS LAS ACCIONES
  			=============================================*/ 

  			if(isset($_GET["perfilOculto"]) && $_GET["perfilOculto"] == "Especial"){

  				$botones =  "Sin ACCESO"; 

  			}else{

  				 $botones =  "<div class='btn-group'><button class='btn btn-danger btnEliminarConsejo' idConsejo='".$consejo[$i]["id"]."'><i class='fa fa-times'></i></button></div>"; 

  			}

		 
		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$consejo[$i]["codigo"].'",
			      "'.$consejo[$i]["nombre"].'",
			      "'.$pais["nombre"].'",
			      "'.$consejo[$i]["fecha"].'",
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
ACTIVAR TABLA DE CONSEJOS
=============================================*/ 
$activarConsejo = new TablaConsejo();
$activarConsejo -> mostrarTablaConsejo();

