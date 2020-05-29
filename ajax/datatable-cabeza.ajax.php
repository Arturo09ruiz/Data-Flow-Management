<?php

require_once "../controladores/cabeza.controlador.php";
require_once "../modelos/cabeza.modelo.php";



class TablaCabeza{

 	/*=============================================
 	 MOSTRAR LA TABLA DE Cabezas de familia
  	=============================================*/ 

	public function mostrarTablaCabeza(){

		$item = null;
    	$valor = null;
        $orden = "id";
        $barrio = $_GET["barrio"];

  		$cabeza = ControladorCabeza::ctrMostrarCabezaBarrio($item, $valor, $orden, $barrio);	

  		if(count($cabeza) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($cabeza); $i++){

		  
		  	/*=============================================
 	 		TRAEMOS LAS ACCIONES
  			=============================================*/ 

  			if(isset($_GET["perfilOculto"]) && $_GET["perfilOculto"] == "Especial"){

  				$botones =  "<h1>Sin Acceso</h1>"; 

  			}else{

  				 $botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarCabeza' idCabeza='".$cabeza[$i]["id"]."' data-toggle='modal' data-target='#modalEditarCabeza'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarCabeza' idCabeza='".$cabeza[$i]["id"]."' codigo='"."'><i class='fa fa-times'></i></button></div>"; 

  			}

		 
		  	$datosJson .='[
			      "'.($i+1).'",
                  "'.$cabeza[$i]["ncm"].'",
			      "'.$cabeza[$i]["nombre"].'",
			      "'.$cabeza[$i]["fecha_nacimiento"].'",
			      "'.$cabeza[$i]["miembros_de_la_familia"].'",
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
ACTIVAR TABLA DE CABEZAS
=============================================*/ 
$activarCabeza = new TablaCabeza();
$activarCabeza -> mostrarTablaCabeza();

