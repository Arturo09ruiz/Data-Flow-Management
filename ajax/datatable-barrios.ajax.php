<?php
require_once "../controladores/barrios.controlador.php";
require_once "../modelos/barrios.modelo.php";

require_once "../controladores/estaca.controlador.php";
require_once "../modelos/estaca.modelo.php";

require_once "../controladores/consejo.controlador.php";
require_once "../modelos/consejo.modelo.php";

require_once "../controladores/pais.controlador.php";
require_once "../modelos/pais.modelo.php";


class TablaBarrios{

 	/*=============================================
 	 MOSTRAR LA TABLA DE Barrios
  	=============================================*/ 

	public function mostrarTablaBarrios(){

		$item = null;
    	$valor = null;
    	$orden = "id";

  		$barrios = ControladorBarrios::ctrMostrarBarrios($item, $valor, $orden);	

  		if(count($barrios) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($barrios); $i++){



 	        /*=============================================
 	 		TRAEMOS EL ESTACA
  			=============================================*/ 

		  	$item = "id";
		  	$valor = $barrios[$i]["idestaca"];
            $orden = "id";

		  	$es = ControladorEstaca::ctrMostrarEstaca($item, $valor, $orden);



		  	/*=============================================
 	 		TRAEMOS EL CONSEJO
  			=============================================*/ 

		  	$item = "id";
		  	$valor = $barrios[$i]["idconsejo"];
            $orden = "id";

		  	$con = ControladorConsejo::ctrMostrarConsejo($item, $valor, $orden);


            /*=============================================
 	 		TRAEMOS EL PAIS
  			=============================================*/ 

		  	$item = "id";
		  	$valor = $barrios[$i]["idpais"];
            $orden = "id";

		  	$pa = ControladorPais::ctrMostrarPais($item, $valor, $orden);

		  	/*=============================================
 	 		TRAEMOS LAS ACCIONES
  			=============================================*/ 

  			if(isset($_GET["perfilOculto"]) && $_GET["perfilOculto"] == "Especial"){

  				$botones =  "<h1>Sin Acceso</h1>"; 

  			}else{

  				 $botones =  "<div class='btn-group'><button class='btn btn-danger btnEliminarBarrios' idBarrios='".$barrios[$i]["id"]."' '><i class='fa fa-times'></i></button></div>"; 

  			}

		 
		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$barrios[$i]["codigo"].'",
                  "'.$barrios[$i]["nombre"].'",
                  "'.$es["nombre"].'",
                  "'.$con["nombre"].'",
			      "'.$pa["nombre"].'",               
			      "'.$barrios[$i]["fecha"].'",
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
ACTIVAR TABLA DE BARRIOS
=============================================*/ 
$activarBarrios = new TablaBarrios();
$activarBarrios -> mostrarTablaBarrios();

