<?php

require_once "../controladores/miembros.controlador.php";
require_once "../modelos/miembros.modelo.php";


class TablaMiembros{

 	/*=============================================
 	 MOSTRAR LA TABLA DE MIEMBROS
  	=============================================*/ 

	public function mostrarTablaMiembros(){

		$item = null;
    	$valor = null;
		$orden = "id";
        $barrio = $_GET["barrio"];

  		$miembros = ControladorMiembros::ctrMostrarMiembrosConformeBarrioObispo($item, $valor, $orden, $barrio);	

  		if(count($miembros) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($miembros); $i++){

		 
		

		  	/*=============================================
 	 		TRAEMOS LAS ACCIONES
  			=============================================*/ 

  			if(isset($_GET["perfilOculto"]) && $_GET["perfilOculto"] == "Especial"){

  				$botones =  "<h1>Sin Acceso</h1>"; 

  			}else{

  				 $botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarMiembros' idMiembros='".$miembros[$i]["id"]."' data-toggle='modal' data-target='#modalEditarMiembros'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarMiembros' idMiembros='".$miembros[$i]["id"]."' '><i class='fa fa-times'></i></button></div>"; 

  			}

		 
		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$miembros[$i]["ncm"].'",
				  "'.$miembros[$i]["nombre"].'",
			      "'.$miembros[$i]["edad"].'",
			      "'.$miembros[$i]["email"].'",
			      "'.$miembros[$i]["telefono"].'",
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
ACTIVAR TABLA DE MIEMBROS
=============================================*/ 
$activarMiembros = new TablaMiembros();
$activarMiembros -> mostrarTablaMiembros();

