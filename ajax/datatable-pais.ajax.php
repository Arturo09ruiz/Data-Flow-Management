<?php

require_once "../controladores/pais.controlador.php";
require_once "../modelos/pais.modelo.php";



class TablaPais{

 	/*=============================================
 	 MOSTRAR LA TABLA DE PAISES
  	=============================================*/ 

	public function mostrarTablaPais(){

		$item = null;
    	$valor = null;
    	$orden = "id";

  		$pais = ControladorPais::ctrMostrarPais($item, $valor, $orden);	

  		if(count($pais) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($pais); $i++){

		  
		  	/*=============================================
 	 		TRAEMOS LAS ACCIONES
  			=============================================*/ 

  			if(isset($_GET["perfilOculto"]) && $_GET["perfilOculto"] == "Especial"){

  				$botones =  "SinAcceso"; 

  			}else{

  				 $botones =  "<div class='btn-group'><button class='btn btn-danger btnEliminarPais' idPais='".$pais[$i]["id"]."'><i class='fa fa-times'></i></button></div>"; 

  			}

		 
		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$pais[$i]["codigo"].'",
			      "'.$pais[$i]["nombre"].'",
			      "'.$pais[$i]["fecha"].'",
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
ACTIVAR TABLA DE PAISES
=============================================*/ 
$activarPais = new TablaPais();
$activarPais -> mostrarTablaPais();

