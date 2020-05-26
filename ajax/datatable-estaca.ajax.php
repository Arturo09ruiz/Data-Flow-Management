<?php

require_once "../controladores/estaca.controlador.php";
require_once "../modelos/estaca.modelo.php";


require_once "../controladores/consejo.controlador.php";
require_once "../modelos/consejo.modelo.php";

require_once "../controladores/pais.controlador.php";
require_once "../modelos/pais.modelo.php";


class TablaEstaca{

 	/*=============================================
 	 MOSTRAR LA TABLA DE ESTACAS
  	=============================================*/ 

	public function mostrarTablaEstaca(){

		$item = null;
    	$valor = null;
    	$orden = "id";

  		$estaca = ControladorEstaca::ctrMostrarEstaca($item, $valor, $orden);	

  		if(count($estaca) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($estaca); $i++){

		  	/*=============================================
 	 		TRAEMOS EL CONSEJO
  			=============================================*/ 

		  	$item = "id";
		  	$valor = $estaca[$i]["idconsejo"];
            $orden = "id";

		  	$con = ControladorConsejo::ctrMostrarConsejo($item, $valor, $orden);


            /*=============================================
 	 		TRAEMOS EL PAIS
  			=============================================*/ 

		  	$item = "id";
		  	$valor = $estaca[$i]["idpais"];
            $orden = "id";

		  	$pa = ControladorPais::ctrMostrarPais($item, $valor, $orden);

		  	/*=============================================
 	 		TRAEMOS LAS ACCIONES
  			=============================================*/ 

  			if(isset($_GET["perfilOculto"]) && $_GET["perfilOculto"] == "Especial"){

  				$botones =  "<h1>Sin Acceso</h1>"; 

  			}else{

  				 $botones =  "<div class='btn-group'><button class='btn btn-danger btnEliminarEstaca' idEstaca='".$estaca[$i]["id"]."' '><i class='fa fa-times'></i></button></div>"; 

  			}

		 
		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$estaca[$i]["codigo"].'",
			      "'.$estaca[$i]["nombre"].'",
                  "'.$con["nombre"].'",
			      "'.$pa["nombre"].'",               
			      "'.$estaca[$i]["fecha"].'",
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
ACTIVAR TABLA DE Estaca
=============================================*/ 
$activarEstaca = new TablaEstaca();
$activarEstaca -> mostrarTablaEstaca();

